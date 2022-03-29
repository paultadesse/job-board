<x-app-layout>
	<x-hero></x-hero>
	<hr>
	<section class="container px-5 py-12 mx-auto">
		<div class="mb-12">
			<div class="flex justify-center space-x-2">
				@foreach($tags as $tag)
					<a href="{{ route('listings.index', ['tag' => $tag->slug]) }}" class="py-1.5 px-1.5 border border-indigo uppercase {{ $tag->slug === request()->get('tag') ? 'bg-indigo-500 text-white' : '' }}">
						{{ $tag->name }}
					</a>
				@endforeach
			</div>
		</div>
		<div class="mb-12">
			<h2 class="text-2xl">
				All Jobs ( {{ $listings->count() }} )
			</h2>
		</div>
		<div class="space-y-4">
			@foreach($listings as $listing)
				<a href="#" class="flex justify-between py-5 px-3 bg-gray-100 {{ $listing->is_highlighted ? 'bg-yellow-100' : '' }}">
						<div class="md:w-16 mr-4 flex flex-col flex-shrink-0">
							<img src="/storage/{{ $listing->logo }}" alt="{{ $listing->company }}" class="w-16 h-16 rounded-full object-cover">
						</div>
						<div class="md:w-1/2 flex flex-col justify-center items-start">
							<h2 class="text-xl font-bold">{{ $listing->title }}</h2>
							<p class="leading-relaxed text-gray-900">{{ $listing->company }} &mdash 
								<span class="text-gray-600">{{ $listing->location }}</span></p>
						</div>
						<div class="md:flex-grow mr-8 space-x-2 flex items-center justify-start">
							@foreach($listing->tags as $tag)
								<span class="py-1.5 px-1.5 border border-indigo uppercase"> {{ $tag->name }} </span>
							@endforeach
						</div>
						<span class="md:flex-grow flex items-center justify-end">
							<span>{{ $listing->created_at->diffForHumans() }}</span>
						</span>
				</a>
			@endforeach
		</div>
	</section>
</x-app-layout>