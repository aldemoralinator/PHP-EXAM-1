@foreach ($contacts as $contact)
    <a 
        href=
        "{{ route('personal_contacts-add', ['number'=>$contact]) }}" 
        onclick=
            "
                event.preventDefault(); 
                document.getElementById('add-contact-form-{{ $contact }}').submit();
            " 
        class="contact-list__contact-item"
    >
        <div class="contact-item__content-container__number">
            add {{ $contact }} 
            <form 
                id="add-contact-form-{{ $contact }}" 
                action="{{ route('personal_contacts-add', ['number'=>$contact]) }}" 
                method="POST" 
                style="display: none;"
            >
                @csrf
            </form>
        </div>
        
    </a>
@endforeach