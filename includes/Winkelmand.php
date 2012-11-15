<?php

class winkelmand{
    public $mand = array();
    
    /**
     * 
     * @param type $items
     * @return type
     */
    public function toevoegenAanMand($items) 
    {
        //lussen over bestaande mand en aantal optellen of toevoegen
        foreach($this->mand as $key => $value) {
            if($this->mand[$key]['id'] === $items['id']) {
                $this->mand[$key]['aantal'] += $items['aantal'];
                return; 
            }
        }
        $this->mand[] = $items;
    }
    
    /**
     * 
     * @param type $items
     * @return type
     */
    public function verwijderenUitMand($items) 
    {
        //lussen over bestaande mand en aantal optellen of toevoegen
        foreach($this->mand as $key => $value) {
            if($this->mand[$key]['id'] === $items['id']) {
                $this->mand[$key]['aantal'] -= $items['aantal'];
                return; 
            } else {
                unset($this->mand[$key]);
                return;
            }
        }
        $this->mand[] = $items;
    }
    
    /**
     * 
     * @return type
     */
    public function mandWeergeven()
    {
        return $this->mand;
    }
    
    /**
     * 
     * @return type
     */
    public function mandLeegmaken () {
        $this->mand = array();
        return $this->mand;
    }
}
?>
