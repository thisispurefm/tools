<?php
# https://gist.github.com/4692807
namespace Protect;

/**
 * Will protect a page with a simple password. The user will only need
 * to input the password once. After that their session will be enough
 * to get them in.
 *
 * @param string $form Location of the form file
 * @param string $passwordHash Hash of the good password.
 * @param string $scope Scope of the password. It allows access on one page to
 * grant access on another page. If not specified then it only grants
 * access to the current page.
 * @return void
 */
function with($form, $passwordHash, $scope = null)
{
	if (!$scope) $scope = current_url();
	$session_key = 'password_protect_' . preg_replace('/\W+/', '_', $scope);

	if (session_status() == PHP_SESSION_NONE) session_start();

	// If user has access then simply return so original page can render.
	if (isset($_SESSION[$session_key])) return;

	// Check that a password has been posted
	if (filter_has_var(INPUT_POST, 'password'))
	{
		$recievedPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

		// Check the POST for access
		if (password_verify($recievedPassword, $passwordHash))
		{
			$_SESSION[$session_key] = true;
			redirect(current_url());
		}
	}

	require $form;
	exit;
}

#### PRIVATE ####

function current_url($script_only = false)
{
	$protocol = 'http';
	$port = ':' . $_SERVER["SERVER_PORT"];
	if (isset($_SERVER["HTTPS"])) $protocol .= 's';
	if ($protocol == 'http' && $port == ':80') $port = '';
	if ($protocol == 'https' && $port == ':443') $port = '';
	$path = $script_only ? $_SERVER['SCRIPT_NAME'] : $_SERVER['REQUEST_URI'];
	return "$protocol://$_SERVER[SERVER_NAME]$port$path";
}

function redirect($url)
{
	header("Location: $url");
	exit;
}