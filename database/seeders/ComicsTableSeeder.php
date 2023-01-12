<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comics=config('db.comics');
        foreach($array_comics as $comic_item){
            // dd(implode(', ',data_get($comic_item,'artists')));
            $new_comic=new Comic();
            $new_comic->title=$comic_item['title'];
            $new_comic->slug=Str::slug($new_comic->title,'-',$new_comic->series);
            $new_comic->description=$comic_item['description'];
            $new_comic->thumb=$comic_item['thumb'];
            $new_comic->price=$comic_item['price'];
            $new_comic->series=$comic_item['series'];
            $new_comic->sale_date=$comic_item['sale_date'];
            $new_comic->type=$comic_item['type'];
            $new_comic->artists=implode(', ',data_get($comic_item,'artists'));
            $new_comic->writers=implode(', ',data_get($comic_item,'writers'));
            $new_comic->save();
        }
    }
}
