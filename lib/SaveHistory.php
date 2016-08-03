
<?php

class SaveHistory{
    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        $this->repository->save();
    }
}
