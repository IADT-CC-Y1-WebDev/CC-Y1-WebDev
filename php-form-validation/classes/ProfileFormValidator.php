<?php
class ProfileFormValidator extends FormValidator {
    public function __construct($data=[]) {
        parent::__construct($data);
    }

    public function validate() {
        if (!$this->isPresent("name")) {
            $this->errors["name"] = "Please enter a name";
        }
        else if (!$this->minLength("name", 6)) {
            $this->errors["name"] = "Please enter a name with at least 6 characters";
        }

        if (!$this->isPresent("age")) {
            $this->errors["age"] = "Please enter a age";
        }
        else if (!$this->isInteger("age")) {
            $this->errors["age"] = "Age must be an integer";
        }
        else if (!$this->min("age", 21)) {
            $this->errors["age"] = "Age must be 21 or older";
        }

        $validCategories = ["Sport", "Music", "Movies"];
        if (!$this->isPresent("category")) {
            $this->errors["category"] = "Please choose a category";
        }
        else if (!$this->isElement("category", $validCategories)) {
            $this->errors["category"] = "Please choose a valid category";
        }

        $validExperiences = ["Novice", "Competent", "Expert"];
        if (!$this->isPresent("experience")) {
            $this->errors["experience"] = "Please choose an experience level";
        }
        else if (!$this->isElement("experience", $validExperiences)) {
            $this->errors["experience"] = "Please choose a valid experience level";
        }
        
        $validLanguages = ["English", "Irish", "Spanish"];
        if (!$this->isPresent("languages")) {
            $this->errors["languages"] = "Please choose a language";
        }
        else if (!$this->isSubset("languages", $validLanguages)) {
            $this->errors["languages"] = "Please choose valid languages";
        }
        else if (!$this->maxLength("languages", 2)) {
            $this->errors["languages"] = "Please choose at most two languages";
        }

        return count($this->errors) === 0;
    }
}
?>