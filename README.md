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
