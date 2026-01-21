<section {{ $attributes->merge(['class' => 'flex items-center gap-3']) }}>
	<x-profile.active-links route="profile.show" href="{{ route('profile.show') }}">
		<x-heroicon-o-user class="w-5 h-5" />
		<span class="ml-3">Profile</span>
	</x-profile.active-links>
	<x-profile.active-links route="profile.show.password" href="{{ route('profile.show.password') }}">
		<x-heroicon-o-lock-closed class="w-5 h-5" />
		<span class="ml-3">Change Password</span>
	</x-profile.active-links>
</section>