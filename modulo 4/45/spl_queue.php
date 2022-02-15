<?php
$ingredientes = new SplQueue();

$ingredientes-> enqueue('Peixe');
$ingredientes-> enqueue('Sal');
$ingredientes-> enqueue('Limão');

foreach($ingredientes as $item) {
    print 'Item: ' . $item . '<br>';
}

print $ingredientes->count();
echo '<pre>';
print $ingredientes->dequeue();
echo '<pre>';

print $ingredientes->count();
echo '<pre>';
print $ingredientes->dequeue();
echo '<pre>';

print $ingredientes->count();
echo '<pre>';
print $ingredientes->dequeue();
echo '<pre>';