<?php
abstract class objetos
{

    protected $_next;

    abstract public function makeHtml($message);

    public function setNext($next)
    {
        $this->_next = $next;
    }

    public function getNext()
    {
        return $this->_next;
    }
}
class header extends objetos
{
    /**
     * @param mixed $message
     */
    public function makeHtml($message)
    {
        if ($message == 'header') {
            echo  '<div class="header">Chain Resp test</div>';
        }
        else {
            if ($this->getNext()) {
                $this->getNext()->makeHtml($message);
            }
        }
    }
}
class article extends objetos
{

    public function makeHtml($message)
    {
        if ($message == 'article') {
            echo '<div class="cube">El homobre llega a la luna</div>';
        }
        else {
            if ($this->getNext()) {
                $this->getNext()->makeHtml($message);
            }
        }
    }
}

class search extends objetos
{

    public function makeHtml($message)
    {
        if ($message == 3) {
            echo  "<div class='search' >buscar</div>";
        }
        else {
            if ($this->getNext()) {
                $this->getNext()->makeHtml($message);
            }
        }
    }
}
