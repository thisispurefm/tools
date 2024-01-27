const music_list_csv = "test.csv";
const music_table = document.querySelector('#music-table-body');
var music_list = [];

async function get(url) {
    const response = await fetch(url);

    if (response.status === 200) {
        return response.text();
    } else {
        return "";
    }
}

// Stolen from StackOverflow (Answer 3 here: https://stackoverflow.com/questions/1293147/how-to-parse-csv-data)
function parseCSV(str) {
    const arr = [];
    let quote = false;  // 'true' means we're inside a quoted field

    // Iterate over each character, keep track of current row and column (of the returned array)
    for (let row = 0, col = 0, c = 0; c < str.length; c++) {
        let cc = str[c], nc = str[c+1];        // Current character, next character
        arr[row] = arr[row] || [];             // Create a new row if necessary
        arr[row][col] = arr[row][col] || '';   // Create a new column (start with empty string) if necessary

        // If the current character is a quotation mark, and we're inside a
        // quoted field, and the next character is also a quotation mark,
        // add a quotation mark to the current column and skip the next character
        if (cc == '"' && quote && nc == '"') { arr[row][col] += cc; ++c; continue; }

        // If it's just one quotation mark, begin/end quoted field
        if (cc == '"') { quote = !quote; continue; }

        // If it's a comma and we're not in a quoted field, move on to the next column
        if (cc == ',' && !quote) { ++col; continue; }

        // If it's a newline (CRLF) and we're not in a quoted field, skip the next character
        // and move on to the next row and move to column 0 of that new row
        if (cc == '\r' && nc == '\n' && !quote) { ++row; col = 0; ++c; continue; }

        // If it's a newline (LF or CR) and we're not in a quoted field,
        // move on to the next row and move to column 0 of that new row
        if (cc == '\n' && !quote) { ++row; col = 0; continue; }
        if (cc == '\r' && !quote) { ++row; col = 0; continue; }

        // Otherwise, append the current character to the current column
        arr[row][col] += cc;
    }
    return arr;
}

function update_search() {
    const search_term = document.querySelector('#music-search').value.toLowerCase();

    for (var i = 0; i < music_table.getElementsByTagName("tr").length; i++) {
        const item = music_table.getElementsByTagName("tr")[i];
        const fields = item.getElementsByTagName("td");
        
        item.style.display = "none";
        for (var j = 0; j < fields.length - 1; j++) {
            const value = fields[j].textContent || fields[j].innerText;
            if (value.toLowerCase().indexOf(search_term) > -1) {
                item.style.display = "";
                break;
            }
        }
    }
}

window.onload = async function () {
    const items = await get(music_list_csv);

    parseCSV(items.substring(items.indexOf('\r\n')+2,items.length)).forEach((item) => {
        const title = item[1];
        const year = item[9];
        const artist = item[0];
        const genre = item[8];
        const length = new Date(item[4] * 1000).toISOString().substring(11, 19).replace(/00:/, "");

        music_list.push([`${title} (${year})`, `${artist}`, `${genre}`, `${length}`]);
    });

    music_list.forEach((item) => {
        const row = document.createElement('tr');

        const one = document.createElement('td');
        one.append(item[0]);
        one.classList.add('music-track', 'mdl-data-table__cell--non-numeric');
        const two = document.createElement('td');
        two.append(item[1]);
        two.classList.add('music-artist', 'mdl-data-table__cell--non-numeric');
        const three = document.createElement('td');
        three.append(item[2]);
        three.classList.add('music-genre', 'mdl-data-table__cell--non-numeric');
        const four = document.createElement('td');
        four.append(item[3]);
        four.classList.add('music-length');

        row.appendChild(one);
        row.appendChild(two);
        row.appendChild(three);
        row.appendChild(four);

        music_table.appendChild(row);
    });
}