<?php

class Person {
    private string $firstName;
    private string $LastName;
    private array $hobbies;

    public function __construct(string $firstName, string $LastName, array $hobbies) {
        $this->firstName = $firstName;
        $this->lastName = $LastName;
        $this->hobbies = $hobbies;
    }

    public function firstName(): string {
        return $this->firstName;
    }

    public function lastName(): string {
        return $this->lastName;
    }

    public function hobbies(): array {
        return $this->hobbies;
    }
}