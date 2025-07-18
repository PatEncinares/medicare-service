<?php

namespace App\Livewire;

use App\Models\HomePage;
use Livewire\Component;

class Home extends Component
{


    public $meta_title = '';
    public $meta_description = '';
    public $robot = '';
    public $canonicalUrl = '';
    /**
     * Mount the component and set meta tags.
     */

    public $headline = '',
           $subheadline = '',
           $description = '',
           $image = '',
           $button1_text = '',
           $button1_link = '',
           $button2_text = '',
           $button2_link = '';




    public function mount()
    {
        $home_page_content = HomePage::first();

        if ($home_page_content) {
            $this->meta_title = $home_page_content->meta_title;
            $this->meta_description = $home_page_content->meta_description;
            $this->robot = $home_page_content->robot;
            // $this->canonicalUrl = $home_page_content->canonical_url;
            $this->headline = $home_page_content->headline;
            $this->subheadline = $home_page_content['sub-headline'];
            $this->description = $home_page_content->description;
            $this->image = $home_page_content->image;
            $this->button1_text = $home_page_content->button1_text;
            $this->button1_link = $home_page_content->button1_link;
            $this->button2_text = $home_page_content->button2_text;
            $this->button2_link = $home_page_content->button2_link;
        } else {
            $this->setDefaultMetaTags();
        }
    }

    public function setDefaultMetaTags()
    {
        $this->meta_title = 'Home Page';
        $this->meta_description = 'This is the home page of our application.';
        $this->robot = 'index, follow';
    }

    public function render()
    {   
        return view('livewire.home')
            ->layout('components.layouts.guest')
            ->layoutData([
                'meta_title' => $this->meta_title,
                'meta_description' => $this->meta_description,
                'robot' => $this->robot,
                // 'canonicalUrl' => $this->canonicalUrl,
                'headline' => $this->headline,
                'subheadline' => $this->subheadline,
                'description' => $this->description,
                'image' => $this->image,
                'button1_text' => $this->button1_text,
                'button1_link' => $this->button1_link,
                'button2_text' => $this->button2_text,
                'button2_link' => $this->button2_link,
            ]);
    }
}
