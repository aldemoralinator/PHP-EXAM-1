@foreach ($contacts as $contact)
    <div class="contact-list__contact-item">
        <div class="contact-item__content-container__number">
            {{ $contact->number }} 
        </div> 
    </div>
@endforeach