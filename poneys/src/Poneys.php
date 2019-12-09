<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if ($number <= $this->count){
            $this->count -= $number;
        }
        else{
            throw new \Exception("Exception can't remove");
        }   
        
    }


    

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }
    
    //Ajout de champs
    public function addPoneyFromField(int $number) : void 
    {
        $this->count += $number;
    }

    public function freePoneyField() :  bool
    {
        if ($this->count  <= 15){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}
?>
