<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use Flasher\Toastr\Prime\ToastrInterface;

class SettingsComponent extends Component
{
    public $title;
    public $address;
    public $email;
    public $phone;
    public $facebook;
    public $twitter;
    public $linkedin;
    public $youtube;
    public $instagram;
    public $pinterest;
    public $quora;


    public function mount()
    {
        $setting = Setting::find(1);
        if ($setting) {
            $this->title = $setting->title;
            $this->address = $setting->address;
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->facebook = $setting->facebook;
            $this->twitter = $setting->twitter;
            $this->linkedin = $setting->linkedin;
            $this->youtube = $setting->youtube;
            $this->pinterest = $setting->pinterest;
            $this->quora = $setting->quora;
            $this->instagram = $setting->instagram;
        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
    }

    public function AddSettings()
    {
        $this->validate([
            'title' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $setting = Setting::find(1);

        if (!$setting) {
            $setting = new Setting();
        }

        $setting->title = $this->title;
        $setting->address = $this->address;
        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->facebook = $this->facebook;
        $setting->twitter = $this->twitter;
        $setting->linkedin = $this->linkedin;
        $setting->youtube = $this->youtube;
        $setting->pinterest = $this->pinterest;
        $setting->quora = $this->quora;
        $setting->instagram = $this->instagram;

        $setting->save();
        toastr()->success('Settings has been saved successfully!');
    }

    public function render()
    {
        return view('livewire.admin.settings-component');
    }
}
