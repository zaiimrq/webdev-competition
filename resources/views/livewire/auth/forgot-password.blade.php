<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        Password::sendResetLink($this->only('email'));

        session()->flash('status', __('Link pengaturan ulang kata sandi akan dikirim ke email akun ada.'));
    }
}; ?>

<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Lupa kata sandi')" :description="__('Masukkan email anda untuk menerima link pengaturan ulang kata sandi')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input wire:model="email" :label="__('Alamat Email')" type="email" required autofocus
            placeholder="email@example.com" />

        <flux:button variant="primary" type="submit" class="w-full">{{ __('Kirim link pengaturan ulang kata sandi') }}
        </flux:button>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-400">
        {{ __('Atau, kembali ke') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('masuk') }}</flux:link>
    </div>
</div>
