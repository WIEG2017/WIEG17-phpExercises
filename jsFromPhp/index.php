
<?php 

abstract class SimpsonCharacter {
    protected $image;

    public abstract function onClick();

    public function draw() {
        echo "<img style='margin: 100px;' src='/jsFromPhp/".$this->image."' onclick='".$this->onClick()."' />";
    }
}

class HomerSimpsonCharacter extends SimpsonCharacter {
    protected $image = 'homer.png';

    public function onClick() {
        return "alert(\"doh!\");";
    }
}
class LisaSimpsonCharacter extends SimpsonCharacter {
    protected $image = 'lisa.png';

    public function onClick() {
        return null;
    }
}

$family = array(
    new HomerSimpsonCharacter(),
    new LisaSimpsonCharacter(),
    new HomerSimpsonCharacter()
);

foreach ($family as $member) {
    $member->draw();
}

?>