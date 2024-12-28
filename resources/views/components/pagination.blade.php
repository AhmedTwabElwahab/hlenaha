<ul class="pagination pagination-success">
    <li class="page-item">
        <a class="page-link" href="{{"?page=".$pagination->currentPage() -1}}" aria-label="Previous">
            <span aria-hidden="true">
              <span class="material-icons">
                  keyboard_arrow_right
              </span>
            </span>
        </a>
    </li>

    @for ($i = 2; $i >= 1; $i--)
        @if(($pagination->currentPage() - $i) >= 1)
            <li class="page-item">
                <a class="page-link" href="{{"?page=".$pagination->currentPage() - $i}}">
                    {{$pagination->currentPage() - $i}}
                </a>
            </li>
        @endif
    @endfor
    <li class="page-item active">
        <a class="page-link" href="{{$pagination->nextPageUrl()}}">{{$pagination->currentPage()}}</a>
    </li>

    @for ($i = 1; $i <= 2; $i++)
        @if(($pagination->currentPage() + $i) <= $pagination->lastpage())
            <li class="page-item">
                <a class="page-link" href="{{"?page=".$pagination->currentPage() + $i}}">
                    {{$pagination->currentPage() + $i}}
                </a>
            </li>
        @endif
    @endfor
    <li class="page-item">
        <a class="page-link" href="{{"?page=".$pagination->lastpage()}}" aria-label="Next">
            <span aria-hidden="true">
              <span class="material-icons">
                keyboard_arrow_left
              </span>
            </span>
        </a>
    </li>
</ul>
