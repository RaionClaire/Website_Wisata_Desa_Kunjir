<?php

namespace App\Livewire\Components;

use Livewire\Component;

class SectionPlanTrip extends Component
{
    public $cards = [];
    public $showModal = false;
    public $selectedCard = null;

    public function mount()
    {
        $this->cards = [
            [
                'img' => 'images/coastal_kunjir.webp',
                't' => 'Sunset di Pantai Kunjir',
                'e' => 'Nikmati pengalaman menyaksikan matahari terbenam yang memukau di Pantai Kunjir.',
                'badge' => 'Populer',
                'badgeColor' => 'bg-blue-500',
                'desc' => 'Nikmati pengalaman menyaksikan matahari terbenam yang memukau di Pantai Kunjir. Dengan latar belakang langit yang berwarna-warni dan suara ombak yang menenangkan, ini adalah momen yang tidak boleh dilewatkan.',
            ],
            [
                'img' => '/images/air_terjun.jpg',
                't' => 'Hiking dan Air Terjun Way Tumbai',
                'e' => 'Jelajahi jalur alami menuju Air Terjun Way Tumbai dan rasakan kesejukan air pegunungan yang jernih.',
                'desc' => 'Jelajahi jalur alami menuju Air Terjun Way Tumbai dan rasakan kesejukan air pegunungan yang jernih.',
            ],
            [
                'img' => '/images/jalantepipantai.jpg',
                't' => 'Jalan Santai Tepi Pantai',
                'e' => 'Rasakan semilir angin laut sambil berjalan santai di sepanjang garis pantai yang tenang dan bersih.',
                'desc' => 'Rasakan semilir angin laut sambil berjalan santai di sepanjang garis pantai yang tenang dan bersih.',
            ],
            [
                'img' => '/images/homestay.jpg',
                't' => 'Menginap di Homestay Lokal',
                'e' => 'Rasakan keramahan warga lokal dengan pengalaman menginap di homestay yang nyaman dan bersahabat.',
                'desc' => 'Rasakan keramahan warga lokal dengan pengalaman menginap di homestay yang nyaman dan bersahabat.',
            ],
            [
                'img' => '/images/mataair.jpg',
                't' => 'Mata Air Panas Kunjir',
                'e' => 'Kunjir memiliki mata air panas alami yang menyegarkan, sempurna untuk relaksasi setelah hari yang panjang beraktivitas.',
                'desc' => 'Kunjir memiliki mata air panas alami yang menyegarkan, sempurna untuk relaksasi setelah hari yang panjang beraktivitas.',
            ],
            [
                'img' => '/images/transportasi.jpg',
                't' => 'Wisata ke Pulau Mengkudu',
                'e' => 'Naik perahu menuju Pulau Mengkudu, destinasi eksotis dengan pasir putih dan air sebening kristal.',
                'desc' => 'Naik perahu menuju Pulau Mengkudu, destinasi eksotis dengan pasir putih dan air sebening kristal.',
            ],
            [
                'img' => '/images/kuliner.jpg',
                't' => 'Wisata Kuliner',
                'e' => 'Cicipi beraneka ragam makanan serta minuman menyegarkan yang ditawarkan penduduk lokal.',
                'desc' => 'Cicipi beraneka ragam makanan serta minuman menyegarkan yang ditawarkan penduduk lokal.',
            ]
        ];
    }

    public function openModal($index)
    {
        $this->selectedCard = $this->cards[$index];
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.components.section-plan-trip');
    }
}
