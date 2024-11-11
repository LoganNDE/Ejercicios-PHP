<?php
    class Team {
        private string $name;
        private array $players;
        private int $matches;
        private int $won;
        private int $lost;
        private int $tie;
        private int $scoreGoals;
        private int $concededGoals;
    
        public function __construct(string $name, array $players, int $matches, int $won, int $lost, int $tie, int $scoreGoals, int $concededGoals) {
            $this->setName($name);
            $this->setPlayers($players);
            $this->setMatches($matches);
            $this->setWon($won);
            $this->setLost($lost);
            $this->setTie($tie);
            $this->setScoreGoals($scoreGoals);
            $this->setConcededGoals($concededGoals);
        }
    
        public function getName(): string {
            return $this->name;
        }
    
        public function setName(string $name): void {
            $this->name = $name;
        }
    
        public function getPlayers(): array {
            return $this->players;
        }
    
        public function setPlayers($players): void {
            $this->players = $players;
        }
    
        public function getMatches(): int {
            return $this->matches;
        }
    
        public function setMatches(int $matches): void {
            $this->matches = $matches;
        }
    
        public function getWon(): int {
            return $this->won;
        }
    
        public function setWon(int $won): void {
            $this->won = $won;
        }
    
        public function getLost(): int {
            return $this->lost;
        }
    
        public function setLost(int $lost): void {
            $this->lost = $lost;
        }
    
        public function getTie(): int {
            return $this->tie;
        }
    
        public function setTie(int $tie): void {
            $this->tie = $tie;
        }
    
        public function getScoreGoals(): int {
            return $this->scoreGoals;
        }
    
        public function setScoreGoals(int $scoreGoals): void {
            $this->scoreGoals = $scoreGoals;
        }
    
        public function getConcededGoals(): int {
            return $this->concededGoals;
        }
    
        public function setConcededGoals(int $concededGoals): void {
            $this->concededGoals = $concededGoals;
        }


    public function render(): void {
        echo "<div class='col-lg-10 team-card card mt-3 mb-3'>" .
         "<div class='card-header'><h2 class='card-title'>Team: " . $this->getName() . "</h2></div>".
         "<div class='card-body'>".
         "<p class='card-text'><strong>Matches:</strong> " . $this->getMatches() . "</p>".
         "<p class='card-text'><strong>Won:</strong> " . $this->getWon() . "</p>".
         "<p class='card-text'><strong>Lost:</strong> " . $this->getLost() . "</p>".
         "<p class='card-text'><strong>Tie:</strong> " . $this->getTie() . "</p>".
         "<p class='card-text'><strong>Score Goals:</strong> " . $this->getScoreGoals() . "</p>".
         "<p class='card-text'><strong>Conceded Goals:</strong> " . $this->getConcededGoals() . "</p>".
         "<h3 class='mt-3'>Players:</h3><table class='table table-striped'>".
         "<thead><tr><th>Name</th><th>Age</th><th>Country</th><th>Dorsal</th><th>Position</th><th>Goals</th><th>Matches</th><th>Minutes</th><th>Yellow Cards</th><th>Red Cards</th></tr></thead><tbody>";
        foreach ($this->getPlayers() as $player) {
             $player->render();
        }
        echo "</tbody></table></div></div>";    
        }
    }
?>