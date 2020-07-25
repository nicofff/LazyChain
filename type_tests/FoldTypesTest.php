<?php declare(strict_types=1);
use LazyChain\LazyChain;

// We should notify if the item argument of the callable is not the same type
// as the type of the iterator
LazyChain::fromArray([1,2,3,4])
->fold(0,function(int $acc,string $n): int{
	return $acc + strlen($n);
});

// We should notify if the type of the acumulator is not the same
// as the return of the callable
// Note: The error here is not particularly nice at time of writing
LazyChain::fromArray([1,2,3,4])
->fold(0,function(string $acc,int $n): string{
	return $acc . $n;
});
         