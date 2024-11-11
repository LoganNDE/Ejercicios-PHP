<?php
    Class Player{

        private $name;
        private $birthDay;
        private $country;
        private $dorsal;
        private $position;
        private $goals;
        private $matches;
        private $minutes;
        private $yellowCards;
        private $redCards;

        public function getName(): string {
            return $this->name;
        }
        
        public function setName(string $name): void {
            $this->name = $name;
        }

        public function setBirthDay(string $birthDay): void {
            $this->birthDay = $birthDay;
        }
        
        public function getBirthDay(): string {
            return $this->birthDay;
        }
        
        public function getCountry(): string {
            return $this->country;
        }
        
        public function setCountry(string $country): void {
            $this->country = $country;
        }
        
        public function getDorsal(): int {
            return $this->dorsal;
        }
        
        public function setDorsal(int $dorsal): void {
            $this->dorsal = $dorsal;
        }
        
        public function getPosition(): string {
            return $this->position;
        }
        
        public function setPosition(string $position): void {
            $this->position = $position;
        }
        
        public function getGoals(): int {
            return $this->goals;
        }
        
        public function setGoals(int $goals): void {
            $this->goals = $goals;
        }
        
        public function getMatches(): int {
            return $this->matches;
        }
        
        public function setMatches(int $matches): void {
            $this->matches = $matches;
        }

        public function getPlayMinutes(): int {
            return $this->minutes;
        }

        public function setPlayMinutes(int $minutes): void{
            $this->minutes = $minutes;
        }
        
        public function getYellowCards(): int {
            return $this->yellowCards;
        }
        
        public function setYellowCards(int $yellowCards): void {
            $this->yellowCards = $yellowCards;
        }
        
        public function getRedCards(): int {
            return $this->redCards;
        }
        
        public function setRedCards(int $redCards): void {
            $this->redCards = $redCards;
        }

        
        public function setAge($birthDay): void{
        }


        public function getAge(): int{
            return 0;
        }

        public function __construct(string $name, string $birthDay, string $country, 
        int $dorsal, string $position, int $goals, int $matches, int $minutes, int $yellowCards, int $redCards){
            $this->setName($name);
            $this->setBirthDay($birthDay);
            $this->setCountry($country);
            $this->setDorsal($dorsal);
            $this->setPosition($position);
            $this->setGoals($goals);
            $this->setMatches($matches);
            $this->setPlayMinutes($minutes);
            $this->setYellowCards($yellowCards);
            $this->setRedCards($redCards);
        }
    
    
        public function score(): void{
        }

        public function addCard(int $colour): void {
            if  ($colour === 1){
                $this->yellowCards++;
            }elseif($colour === 2){
                $this->redCards++;
            }
        }
        
        public function render(): void{    
            echo "<tr>" .
            "<td>" . $this->getName() . "</td>".
            "<td>" . $this->getAge() . "</td>".
            "<td>" . $this->getCountry() . "</td>".
            "<td>" . $this->getDorsal() . "</td>".
            "<td>" . $this->getPosition() . "</td>".
            "<td>" . $this->getGoals() . "</td>".
            "<td>" . $this->getMatches() . "</td>".
            "<td>" . $this->getPlayMinutes() . "</td>".
            "<td>" . $this->getYellowCards() . "</td>".
            "<td>" . $this->getRedCards() . "</td>".

            "<td>" . "</tr>";
        }
    }
?>