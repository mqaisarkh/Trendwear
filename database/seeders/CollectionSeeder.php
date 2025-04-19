<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CollectionSeeder extends Seeder
{
    public function run(): void
    {
        $collections = [
            [
                'name' => 'Summer Essentials',
                'description' => 'Light and breezy collection perfect for summer days',
                'is_featured' => true,
            ],
            [
                'name' => 'Winter Warmth',
                'description' => 'Cozy and comfortable winter collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Spring Bloom',
                'description' => 'Fresh and vibrant spring collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Autumn Harvest',
                'description' => 'Rich and warm autumn collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Urban Streetwear',
                'description' => 'Modern street style collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Business Casual',
                'description' => 'Professional yet comfortable workwear',
                'is_featured' => false,
            ],
            [
                'name' => 'Athletic Performance',
                'description' => 'High-performance activewear collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Beach Vibes',
                'description' => 'Perfect for your next beach getaway',
                'is_featured' => false,
            ],
            [
                'name' => 'Evening Elegance',
                'description' => 'Sophisticated evening wear collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Weekend Comfort',
                'description' => 'Relaxed and comfortable weekend wear',
                'is_featured' => false,
            ],
            [
                'name' => 'Festival Fashion',
                'description' => 'Bold and vibrant festival collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Minimalist Basics',
                'description' => 'Essential pieces for everyday wear',
                'is_featured' => true,
            ],
            [
                'name' => 'Vintage Revival',
                'description' => 'Classic styles with a modern twist',
                'is_featured' => false,
            ],
            [
                'name' => 'Luxury Essentials',
                'description' => 'Premium quality everyday pieces',
                'is_featured' => true,
            ],
            [
                'name' => 'Outdoor Adventure',
                'description' => 'Durable and functional outdoor wear',
                'is_featured' => false,
            ],
            [
                'name' => 'Formal Attire',
                'description' => 'Elegant formal wear collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Casual Friday',
                'description' => 'Relaxed office wear collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Travel Ready',
                'description' => 'Versatile pieces for your travels',
                'is_featured' => false,
            ],
            [
                'name' => 'Holiday Special',
                'description' => 'Festive collection for the holidays',
                'is_featured' => true,
            ],
            [
                'name' => 'Gym Essentials',
                'description' => 'Performance-focused workout wear',
                'is_featured' => false,
            ],
            [
                'name' => 'Boho Chic',
                'description' => 'Free-spirited bohemian collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Smart Casual',
                'description' => 'Polished yet relaxed collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Rainy Day',
                'description' => 'Weather-resistant collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Date Night',
                'description' => 'Romantic evening wear collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Workout Warriors',
                'description' => 'High-intensity workout collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Garden Party',
                'description' => 'Elegant outdoor event collection',
                'is_featured' => true,
            ],
            [
                'name' => 'City Explorer',
                'description' => 'Urban adventure collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Weekend Getaway',
                'description' => 'Perfect for short trips',
                'is_featured' => false,
            ],
            [
                'name' => 'Office Power',
                'description' => 'Professional workwear collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Beach Club',
                'description' => 'Stylish beach and pool wear',
                'is_featured' => false,
            ],
            [
                'name' => 'Mountain Retreat',
                'description' => 'Cozy mountain getaway collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Urban Nomad',
                'description' => 'Versatile city living collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Weekend Warrior',
                'description' => 'Active weekend collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Evening Glam',
                'description' => 'Glamorous evening collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Morning Run',
                'description' => 'Early morning workout collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Coffee Date',
                'description' => 'Casual meetup collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Brunch Style',
                'description' => 'Perfect for weekend brunch',
                'is_featured' => false,
            ],
            [
                'name' => 'Night Out',
                'description' => 'Stylish nightlife collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Weekend Market',
                'description' => 'Casual market day collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Picnic Perfect',
                'description' => 'Outdoor dining collection',
                'is_featured' => false,
            ],
            [
                'name' => 'City Commute',
                'description' => 'Urban transportation collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Weekend Brunch',
                'description' => 'Relaxed brunch collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Evening Stroll',
                'description' => 'Casual evening collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Morning Coffee',
                'description' => 'Early morning collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Weekend Adventure',
                'description' => 'Active weekend collection',
                'is_featured' => true,
            ],
            [
                'name' => 'City Lights',
                'description' => 'Urban nightlife collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Weekend Escape',
                'description' => 'Getaway collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Evening Soiree',
                'description' => 'Elegant evening collection',
                'is_featured' => true,
            ],
            [
                'name' => 'Morning Walk',
                'description' => 'Early morning collection',
                'is_featured' => false,
            ],
            [
                'name' => 'Weekend Relax',
                'description' => 'Relaxed weekend collection',
                'is_featured' => false,
            ],
        ];

        foreach ($collections as $collection) {
            Collection::create($collection);
        }
    }
} 