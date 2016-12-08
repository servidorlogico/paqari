<div class="cabeza">
            @if($section=='autism') 
                @if(isset($product))
                 100% Autismo
                @else
                100% Autismo
                
                @endif
            @elseif($section=='unique')
                @if(isset($product))
                Pieza Única
                @else
                Pieza única
                @endif
            @elseif($section=='extra')
                @if(isset($product))
                Extra
                @else
                Extra
                
                @endif
            @elseif($section=='search')
                Productos encontrados
            @else
            ERROR! No encontrado
            @endif
            
</div>