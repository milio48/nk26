# nk26
Nkosec Encode, 2 side encode. change alphabet to numeric or  back numeric to alphabet.

### nk26 logic
<img src="https://raw.githubusercontent.com/milio48/nk26/master/nk26-logic-fixed.jpg" width="60%"></img>
 - focused on alphanumeric, use a simple logic str_replace.
 - this logic is made, when I make a challenge for a friend in a detective game.

### php example
```
<?php
include('nk26.php');
```

```nk26_encode('hello there');```
result : 961515180115961136

```nk26_encode_safe('Hello There'); // hello there(lowercase)```
result : 961515180115961136

```nk26_decode('961515180115961136');```
result : hello there


# Javascript
```javascript
function nk26_encode(data) {
    const a = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', ' '];
    const b = ['2', '3', '4', '5', '6', '7', '8', '9', '12', '13', '14', '15', '16', '17', '18', '19', '112', '113', '114', '115', '116', '117', '118', '119', '1112', '1113', '0'];
    return data.split('').map(char => {
        const index = a.indexOf(char);
        return index !== -1 ? b[index] : char;
    }).join('');
}


function nk26_decode(data) {
    const replacements = [
        { from: ['1112', '1113', '0'], to: ['y', 'z', ' '] },
        { from: ['112', '113', '114', '115', '116', '117', '118', '119'], to: ['q', 'r', 's', 't', 'u', 'v', 'w', 'x'] },
        { from: ['12', '13', '14', '15', '16', '17', '18', '19'], to: ['i', 'j', 'k', 'l', 'm', 'n', 'o', 'p'] },
        { from: ['2', '3', '4', '5', '6', '7', '8', '9'], to: ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'] }
    ];

    replacements.forEach(replacement => {
        replacement.from.forEach((item, index) => {
            data = data.split(item).join(replacement.to[index]);
        });
    });

    return data;
}

// Example
const encoded = nk26_encode("HELLO THERE".toLowerCase());
console.log(encoded); // Output: 961515180115961136

const decoded = nk26_decode("961515180115961136");
console.log(decoded); // Output: hello there
```
