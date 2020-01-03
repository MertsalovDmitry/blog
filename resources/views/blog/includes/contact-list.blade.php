<!-- Contact Information -->
<div class="contact-information">
    @foreach ($contacts as $contact)
        <p><span>{{ $contact->title }}:</span> {{ $contact->description }}</p>
    @endforeach
</div>