<?php

use Illuminate\Database\Seeder;

use App\Models\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $songs = config('songs');
    
            foreach($songs as $song){
                // Definiamo una nuova istanza
                $new_songs = new Song();
                // Richiamiamo l'istanza per inserire i dati con fill
                $new_songs -> fill($song);
                // Salva i dati
                $new_songs -> save();
            }
    
        }
    }
}
