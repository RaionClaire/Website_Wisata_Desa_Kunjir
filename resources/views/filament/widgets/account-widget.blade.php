<x-filament-widgets::widget>
    <x-filament::section>
        <section role="region" aria-labelledby="user-profile-card">
            <div
                class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-sky-500 via-teal-500 to-emerald-600 dark:from-sky-600 dark:via-teal-700 dark:to-emerald-800 p-6 shadow-xl transition-all duration-500 text-gray-900 dark:text-white">

                <!-- Background Effects -->
                <div class="absolute inset-0 bg-white/[0.04] dark:bg-black/[0.15] backdrop-blur-2xl"></div>
                <div
                    class="absolute -top-24 -right-24 h-64 w-64 rounded-full bg-white/10 dark:bg-white/5 blur-3xl opacity-40 animate-pulse">
                </div>
                <div
                    class="absolute -bottom-24 -left-24 h-64 w-64 rounded-full bg-white/10 dark:bg-white/5 blur-3xl opacity-30 animate-pulse delay-1000">
                </div>

                <!-- Main Content -->
                <div class="relative z-10 flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">

                    <!-- User Info -->
                    <div class="flex items-center gap-4">
                        <div class="flex flex-col gap-1">
                            <!-- Greeting -->
                            <span
                                class="font-semibold text-2xl uppercase tracking-wider drop-shadow-lg animate-[pulse_4s_ease-in-out_infinite]"
                                style="background: linear-gradient(to right, #10b981, #059669, #047857); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                {{ $this->getGreeting() }},
                            </span>

                            <!-- Username -->
                            <h2 id="user-profile-card"
                                class="text-2xl font-bold tracking-tight leading-tight text-gray-900 dark:text-white">
                                {{ $this->getUser()->name }}
                            </h2>

                            <!-- Email -->
                            <div
                                class="mt-0.5 inline-flex items-center gap-1.5 text-xs text-gray-700 dark:text-gray-300">
                                <x-heroicon-o-envelope class="w-4 h-4 flex-shrink-0" />
                                <span class="truncate">{{ $this->getUser()->email }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Section -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full lg:w-auto">

                        <!-- Account Age -->
                        <div tabindex="0"
                            class="group relative overflow-hidden rounded-xl bg-white/70 dark:bg-white/5 backdrop-blur-md px-4 py-4 transition-all duration-300 hover:bg-white/80 dark:hover:bg-white/[0.08] focus-visible:ring-2 focus-visible:ring-emerald-400 focus:outline-none hover:scale-[1.03] hover:shadow-lg">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <div class="relative">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div
                                        class="flex h-7 w-7 items-center justify-center rounded-lg bg-emerald-100 text-emerald-700 dark:bg-emerald-700 dark:text-emerald-100 transition-colors duration-300">
                                        <x-heroicon-o-calendar class="w-4 h-4" />
                                    </div>
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                        Bergabung
                                    </span>
                                </div>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">
                                    {{ $this->getAccountAge() }}
                                </p>
                            </div>
                        </div>

                        <!-- Role Badge -->
                        <div tabindex="0"
                            class="group relative overflow-hidden rounded-xl bg-white/70 dark:bg-white/5 backdrop-blur-md px-4 py-4 transition-all duration-300 hover:bg-white/80 dark:hover:bg-white/[0.08] focus-visible:ring-2 focus-visible:ring-emerald-400 focus:outline-none hover:scale-[1.03] hover:shadow-lg">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <div class="relative">
                                <div class="flex items-center gap-2 mb-1.5">
                                    <div
                                        class="flex h-7 w-7 items-center justify-center rounded-lg bg-emerald-100 text-emerald-700 dark:bg-emerald-700 dark:text-emerald-100 transition-colors duration-300">
                                        <x-heroicon-o-shield-check class="w-4 h-4" />
                                    </div>
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                        Role
                                    </span>
                                </div>

                                @php
                                    $roles = $this->getUser()->getRoleNames();
                                    $roleDisplay = $roles->isNotEmpty() ? ucfirst($roles->first()) : 'Tidak ada peran';

                                    // gunakan string warna yang didukung Filament badge: success, warning, info, secondary, danger, etc.
                                    $roleColor = match (strtolower($roleDisplay)) {
                                        'superadmin' => 'warning',
                                        'admin' => 'success',
                                        'editor' => 'info',
                                        default => 'secondary',
                                    };
                                @endphp

                                <x-filament::badge :color="$roleColor" size="lg" class="font-bold text-sm">
                                    {{ $roleDisplay }}
                                </x-filament::badge>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </x-filament::section>
</x-filament-widgets::widget>
