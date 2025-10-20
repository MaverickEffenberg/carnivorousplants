<div class="card shadow-sm border-0 h-100" style="border-radius: 20px; background-color: #F4FFF8;">
    <a href="{{ route('plants.show', $plant->id) }}" class="text-decoration-none">
        <img 
            src="{{ asset($plant->image_url ?? 'images/default-plant.jpg') }}" 
            class="card-img-top" 
            alt="{{ $plant->name ?? 'Plant Image' }}" 
            style="
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
                height: 220px;
                object-fit: cover;
                background-color: #E8F5E9;
            ">
    </a>

    <div class="card-body d-flex flex-column">
        <a href="{{ route('plants.show', $plant->id) }}" class="text-decoration-none">
            <h5 class="card-title mb-1" style="color: #234F32; font-weight: 700;">
                {{ $plant->name ?? 'Unknown Plant' }}
            </h5>
        </a>

        <p class="text-muted mb-2 flex-grow-1" style="font-size: 0.9rem; line-height: 1.5;">
            {{ Str::limit($plant->short_description ?? 'No description available.', 80) }}
        </p>

        <p class="text-success mb-3 fw-bold" style="font-size: 1rem;">
            {{ $plant->formatted_price ?? 'Rp —' }}
        </p>

        <a href="{{ route('plants.show', $plant->id) }}" 
           class="btn w-100 fw-bold text-decoration-none"
           style="
               background-color: #3B7A57;
               color: #F4FFF8;
               border-radius: 15px;
               border: none;
               padding: 10px 0;
               box-shadow: 0 3px 6px rgba(0,0,0,0.15);
               transition: all 0.2s ease-in-out;
           "
           onmouseover="this.style.backgroundColor='#2E6044';"
           onmouseout="this.style.backgroundColor='#3B7A57';">
            View Details
        </a>
    </div>
</div>
