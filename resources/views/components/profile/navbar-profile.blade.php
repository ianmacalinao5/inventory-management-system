@php
	$iconClass = 'w-5 h-5 ';
	$textClass = 'ml-3 ';
@endphp

<section {{ $attributes->merge(['class' => 'flex items-center gap-3']) }}>
	<x-profile.active-links route="profile.show" href="{{ route('profile.show') }}">
		<x-heroicon-o-user class="{{ $iconClass }}" />
		<span class="{{ $textClass }}">Profile</span>
	</x-profile.active-links>
	<x-profile.active-links route="profile.show.password" href="{{ route('profile.show.password') }}">
		<x-heroicon-o-lock-closed class="{{ $iconClass }}" />
		<span class="{{ $textClass }}">Change Password</span>
	</x-profile.active-links>
	<x-profile.active-links route="profile.appearance.index" href="{{ route('profile.appearance.index') }}">
		<x-heroicon-o-computer-desktop class="{{ $iconClass }}" />
		<span class="{{ $textClass }}">Appearance</span>
	</x-profile.active-links>
</section>