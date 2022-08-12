<?php

class ManageBook
{
    public array $docs = [];

    public function addDoc(object $doc)
    {
        foreach ($this->docs as $data) {
            if ($data->getCode() == $doc->getCode()) {
                echo "Invalid! Code exists";
                echo "\n";
                return;
            }
        }
        $this->docs[] = $doc;
        return $this->docs;
    }

    public function getDoc(int $code)
    {
        foreach ($this->docs as $data) {
            if ($data->getCode() == $code) {
                return $data;
            }
        }
        echo "Code does not exist";
        return;
    }

    public function deleteDoc(int $code)
    {
        $doc = $this->getDoc($code);
        if ($doc) {
            unset($this->docs[array_search($doc, $this->docs)]);
            echo "Delete Success";
            return $doc;
        }
        return;
    }

    public function listDoc()
    {
        echo "\n";
        echo "List Document";
        echo "\n";
        foreach ($this->docs as $data) {
            echo $data->toString();
            echo "\n";
        }
    }

    public function searchDoc(int $code)
    {
        $doc = $this->getDoc($code);
        if ($doc) {
            echo $doc->toString();
            echo "\n";
            return $doc;
        }
        return;
    }
}
