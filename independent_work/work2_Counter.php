<?php

class Counter {
    private $count = 0;

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
        }
    }

    public function reset() {
        $this->count = 0;
    }

    public function getCount() {
        return $this->count;
    }
}


$counter = new Counter();

$counter->increment();
print("После первого увеличения: " . $counter->getCount() . "<br>");

$counter->increment();
print("После второго увеличения: " . $counter->getCount() . "<br>");

$counter->decrement();
print("После уменьшения: " . $counter->getCount() . "<br>");

$counter->reset();
print("После сброса: " . $counter->getCount() . "<br>");