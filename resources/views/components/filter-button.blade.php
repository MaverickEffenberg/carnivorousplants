<a href="{{ $category ? route('plants', ['category' => $category]) : route('plants') }}" 
    class="btn px-4 py-2 fw-bold {{ $isActive ? 'active' : '' }}"
    style="background-color: {{ $isActive ? '#3B7A57' : '#F4FFF8' }}; 
           color: {{ $isActive ? '#F4FFF8' : '#2C3E2F' }}; 
           border-radius: 25px; 
           border: 2px solid #3B7A57;
           transition: all 0.2s ease-in-out;">
    {{ $label }}
</a>
