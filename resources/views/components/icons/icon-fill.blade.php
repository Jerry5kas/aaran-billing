@props(['iconfill',
        'colour'=>null,
        'width'=>'24px',
        'height'=>'24px',
        ])

<span class="inline-flex justify-center items-center">
<svg aria-hidden="true"
     xmlns="http://www.w3.org/2000/svg" width="{{$width}}"  height="{{$height}}" fill="{{$colour}}" viewBox="0 0 24 24" {{$attributes}}>



    @switch($iconfill)

        @case('twitter1')
            <path fill-rule="evenodd"
                  d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z"
                  clip-rule="evenodd"/>
            @break

        @case('facebook-fill')
            <path fill-rule="evenodd"
                  d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                  clip-rule="evenodd"/>
            @break

        @case('check')
            <path fill-rule="evenodd"
                  d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                  clip-rule="evenodd"/>

            @break

        @case('git-hub')
            <path fill-rule="evenodd"
                  d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z"
                  clip-rule="evenodd"/>
            @break

        @case('phone1')
            <path
                d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
            @break

        @case('cmp')
            <path
                d="m16.488,10.726c.158,1.78-1.24,3.274-2.988,3.274h-3.294c-.812,0-1.402-.791-1.144-1.562.538-1.612,1.533-3.949,3.727-4.371,1.755-.338,3.542.879,3.7,2.659Zm1.678-1.48l5.126-5.126c.943-.942.945-2.47.003-3.413-.941-.942-2.467-.943-3.409-.002-.032.032-4.953,5.53-4.953,5.53,1.491.45,2.686,1.564,3.232,3.011Zm4.334-.246c-.828,0-1.5.672-1.5,1.5v3c0,1.379-1.121,2.5-2.5,2.5H5.5c-1.378,0-2.5-1.121-2.5-2.5v-6c0-1.379,1.122-2.5,2.5-2.5h7c.828,0,1.5-.672,1.5-1.5s-.672-1.5-1.5-1.5h-7C2.467,2,0,4.468,0,7.5v6c0,3.032,2.467,5.5,5.5,5.5h5v2h-3c-.829,0-1.5.672-1.5,1.5s.671,1.5,1.5,1.5h9c.828,0,1.5-.672,1.5-1.5s-.672-1.5-1.5-1.5h-3v-2h5c3.032,0,5.5-2.468,5.5-5.5v-3c0-.828-.672-1.5-1.5-1.5Z"/>
            @break

        @case('folder')
            <path
                d="M23.899,7H4v-1c0-2.757,2.243-5,5-5h2.056c.463,0,.927,.109,1.341,.316l3.156,1.578c.138,.069,.293,.105,.447,.105h3c2.414,0,4.434,1.721,4.899,4ZM4,9v5c0,2.757,2.243,5,5,5h10c2.757,0,5-2.243,5-5v-5H4Zm15,12H5c-1.654,0-3-1.346-3-3V8c-.006-1.308-1.995-1.307-2,0v10c0,2.757,2.243,5,5,5h14c1.308-.005,1.307-1.995,0-2Z"/>
            @break

        @case('folder1')
            <path
                d="M20.5,21.5c0,.828-.672,1.5-1.5,1.5H5.5c-3.033,0-5.5-2.468-5.5-5.5V8.5c.034-1.972,2.967-1.971,3,0v9c0,1.379,1.122,2.5,2.5,2.5h13.5c.828,0,1.5,.672,1.5,1.5Zm3.5-14v6c0,2.481-2.019,4.5-4.5,4.5H9.5c-2.481,0-4.5-2.019-4.5-4.5V5.5c0-2.481,2.019-4.5,4.5-4.5h2.056c.54,0,1.081,.128,1.564,.369l3.156,1.578c.068,.034,.146,.053,.224,.053h3c2.481,0,4.5,2.019,4.5,4.5Zm-3,6v-5.5H8v5.5c0,.827,.673,1.5,1.5,1.5h10c.827,0,1.5-.673,1.5-1.5Z"/>
            @break

        @case('fast-time')
            <path d="m9.5 24h-8a1.5 1.5 0 0 1 0-3h8a1.5 1.5 0 0 1 0 3z"/>
            <path d="m7.5 19h-6a1.5 1.5 0 0 1 0-3h6a1.5 1.5 0 0 1 0 3z"/>
            <path d="m5.5 14h-4a1.5 1.5 0 0 1 0-3h4a1.5 1.5 0 0 1 0 3z"/>
            <path
                d="m14.5 23.722a1.5 1.5 0 0 1 -.354-2.958 9.022 9.022 0 1 0 -10.303-12.622 1.5 1.5 0 0 1 -2.711-1.284 12.023 12.023 0 1 1 13.723 16.821 1.513 1.513 0 0 1 -.355.043z"/>
            <path
                d="m12.5 6a1.5 1.5 0 0 0 -1.5 1.5v4.293a2 2 0 0 0 .586 1.414l1.793 1.793a1.5 1.5 0 0 0 2.121-2.121l-1.5-1.5v-3.879a1.5 1.5 0 0 0 -1.5-1.5z"/>
            @break

        @case('blinds')
            <path
                d="M24,21c0,1.654-1.346,3-3,3s-3-1.346-3-3c0-1.302,.839-2.402,2-2.816V5c0-1.304-.836-2.416-2-2.829v1.829H0C0,1.791,1.791,0,4,0h13c2.761,0,5,2.239,5,5v13.184c1.161,.414,2,1.514,2,2.816Zm-6-9H0v4H18v-4Zm0-6H0v4H18V6ZM0,18c0,2.209,1.791,4,4,4h12.101c-.066-.323-.101-.657-.101-1,0-1.131,.39-2.162,1.023-3H0Z"/>
            @break

        @case('headset')
            <path
                d="M5,22a2,2,0,0,0,2-2V14a2,2,0,0,0-2-2V11a7,7,0,0,1,14,0v1a2,2,0,0,0-2,2v6H14a1,1,0,0,0,0,2h5a5,5,0,0,0,2-9.576V11A9,9,0,0,0,3,11v1.424A5,5,0,0,0,5,22Z"/>
            @break

        @case('msg-envelop')
            <path
                d="M22.315,7.836l-1.2-1.171v-2.665c0-2.206-1.794-4-4-4H7.115C4.91,0,3.115,1.794,3.115,4v2.453c-.023,.02-1.42,1.374-1.42,1.374-1.077,1.032-1.695,2.48-1.695,3.972v6.702c0,3.033,2.467,5.5,5.5,5.5h13c3.032,0,5.5-2.467,5.5-5.5v-6.702c0-1.492-.617-2.939-1.685-3.962Zm-13.7-3.836h7c1.972,.034,1.971,2.967,0,3h-7c-1.972-.033-1.971-2.967,0-3Zm0,5h5c1.972,.034,1.971,2.967,0,3h-5c-1.972-.033-1.971-2.967,0-3Zm9.885,12H5.5c-1.378,0-2.5-1.122-2.5-2.5v-6.338l5.226,5.227c2.06,2.137,5.729,2.135,7.792-.014l4.982-5.109v6.233c0,1.378-1.121,2.5-2.5,2.5Z"/>
            @break

        @case('eclipse')
            <path
                d="M13.5,19.467V24h-3V19.854a7.966,7.966,0,0,1-2.991-1.241L4.575,21.546,2.454,19.425l2.932-2.932A7.947,7.947,0,0,1,4.142,13.5H0v-3H4.142A7.947,7.947,0,0,1,5.386,7.507L2.454,4.575,4.575,2.454,7.509,5.387A7.966,7.966,0,0,1,10.5,4.146V0h3V4.533a8.53,8.53,0,0,0-3.06,2.741,4.966,4.966,0,0,0,0,9.452A8.53,8.53,0,0,0,13.5,19.467ZM24,12a6.5,6.5,0,1,1-6.5-6.5A6.508,6.508,0,0,1,24,12Zm-3,0a3.5,3.5,0,1,0-3.5,3.5A3.5,3.5,0,0,0,21,12Z"/>
            @break

        @case('square-left')
            <path
                d="M24,19V5a5.006,5.006,0,0,0-5-5H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19A5.006,5.006,0,0,0,24,19ZM8,12a2.993,2.993,0,0,1,.752-1.987c.291-.327.574-.637.777-.84L12.353,6.3a1,1,0,0,1,1.426,1.4L10.95,10.58c-.187.188-.441.468-.7.759a1,1,0,0,0,0,1.323c.258.29.512.57.693.752L13.779,16.3a1,1,0,0,1-1.426,1.4L9.524,14.822c-.2-.2-.48-.507-.769-.833A2.99,2.99,0,0,1,8,12Z"/>
            @break

        @case('square-right')
            <path
                d="M0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5a5.006,5.006,0,0,0-5-5H5A5.006,5.006,0,0,0,0,5Zm16,7a2.993,2.993,0,0,1-.752,1.987c-.291.327-.574.637-.777.84L11.647,17.7a1,1,0,1,1-1.426-1.4L13.05,13.42c.187-.188.441-.468.7-.759a1,1,0,0,0,0-1.323c-.258-.29-.512-.57-.693-.752L10.221,7.7a1,1,0,1,1,1.426-1.4l2.829,2.879c.2.2.48.507.769.833A2.99,2.99,0,0,1,16,12Z"/>
            @break

        @case('angle-right')
            <path
                d="M24,5V19a5.006,5.006,0,0,1-5,5H5a5.006,5.006,0,0,1-5-5V5A5.006,5.006,0,0,1,5,0H19A5.006,5.006,0,0,1,24,5ZM2,19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5Zm14-7a2.993,2.993,0,0,1-.752,1.987c-.291.327-.574.637-.777.84L11.647,17.7a1,1,0,1,1-1.426-1.4L13.05,13.42c.187-.188.441-.468.7-.759a1,1,0,0,0,0-1.323c-.258-.29-.512-.57-.693-.752L10.221,7.7a1,1,0,1,1,1.426-1.4l2.829,2.879c.2.2.48.507.769.833A2.99,2.99,0,0,1,16,12Z"/>
            @break

        @case('angle-left')
            <path
                d="M0,19V5A5.006,5.006,0,0,1,5,0H19a5.006,5.006,0,0,1,5,5V19a5.006,5.006,0,0,1-5,5H5A5.006,5.006,0,0,1,0,19ZM22,5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3ZM8,12a2.993,2.993,0,0,1,.752-1.987c.291-.327.574-.637.777-.84L12.353,6.3a1,1,0,0,1,1.426,1.4L10.95,10.58c-.187.188-.441.468-.7.759a1,1,0,0,0,0,1.323c.258.29.512.57.693.752L13.779,16.3a1,1,0,0,1-1.426,1.4L9.524,14.822c-.2-.2-.48-.507-.769-.833A2.99,2.99,0,0,1,8,12Z"/>
            @break

        @case('chart-bar')
            <path
                d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z"/>
            @break

        @case('paper-clip')
            <path
                d="M18.97 3.659a2.25 2.25 0 0 0-3.182 0l-10.94 10.94a3.75 3.75 0 1 0 5.304 5.303l7.693-7.693a.75.75 0 0 1 1.06 1.06l-7.693 7.693a5.25 5.25 0 1 1-7.424-7.424l10.939-10.94a3.75 3.75 0 1 1 5.303 5.304L9.097 18.835l-.008.008-.007.007-.002.002-.003.002A2.25 2.25 0 0 1 5.91 15.66l7.81-7.81a.75.75 0 0 1 1.061 1.06l-7.81 7.81a.75.75 0 0 0 1.054 1.068L18.97 6.84a2.25 2.25 0 0 0 0-3.182Z"/>
            @break

        @case('dot-horizontal')
            <path
                d="M4.5 12a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm6 0a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm6 0a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"/>
            @break

        @case('dot-vertical')
            <path
                d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"/>
            @break

        @case('home')
            <path
                d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z"/>
            <path
                d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z"/>
            @break

        @case('exclamation-circle')
            <path fill-rule="evenodd"
                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                  clip-rule="evenodd"/>
            @break

        @case('exclamation-triangle')
            <path fill-rule="evenodd"
                  d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                  clip-rule="evenodd"/>
            @break
            @break

        @case('plus-circle')
            <path fill-rule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                  clip-rule="evenodd"/>
            @break

        @case('info-circle')
            <path fill-rule="evenodd"
                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                  clip-rule="evenodd"/>
            @break

        @case('minus-circle')
            <path fill-rule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm3 10.5a.75.75 0 0 0 0-1.5H9a.75.75 0 0 0 0 1.5h6Z"
                  clip-rule="evenodd"/>
            @break

        @case('play-circle')
            <path fill-rule="evenodd"
                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm14.024-.983a1.125 1.125 0 0 1 0 1.966l-5.603 3.113A1.125 1.125 0 0 1 9 15.113V8.887c0-.857.921-1.4 1.671-.983l5.603 3.113Z"
                  clip-rule="evenodd"/>
            @break

        @case('pause-circle')
            <path fill-rule="evenodd"
                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM9 8.25a.75.75 0 0 0-.75.75v6c0 .414.336.75.75.75h.75a.75.75 0 0 0 .75-.75V9a.75.75 0 0 0-.75-.75H9Zm5.25 0a.75.75 0 0 0-.75.75v6c0 .414.336.75.75.75H15a.75.75 0 0 0 .75-.75V9a.75.75 0 0 0-.75-.75h-.75Z"
                  clip-rule="evenodd"/>
            @break

        @case('question-circle')
            <path fill-rule="evenodd"
                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                  clip-rule="evenodd"/>
            @break

        @case('shield-check')
            <path fill-rule="evenodd"
                  d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                  clip-rule="evenodd"/>
            @break

        @case('x-circle')
            <path fill-rule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"
                  clip-rule="evenodd"/>
            @break

        @case('check-circle')
            <path fill-rule="evenodd"
                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                  clip-rule="evenodd"/>
            @break

        @case('back-space')
            <path fill-rule="evenodd"
                  d="M2.515 10.674a1.875 1.875 0 0 0 0 2.652L8.89 19.7c.352.351.829.549 1.326.549H19.5a3 3 0 0 0 3-3V6.75a3 3 0 0 0-3-3h-9.284c-.497 0-.974.198-1.326.55l-6.375 6.374ZM12.53 9.22a.75.75 0 1 0-1.06 1.06L13.19 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06l1.72-1.72 1.72 1.72a.75.75 0 1 0 1.06-1.06L15.31 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-1.72 1.72-1.72-1.72Z"
                  clip-rule="evenodd"/>
            @break

        @case('photo')
            <path fill-rule="evenodd"
                  d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                  clip-rule="evenodd"/>
            @break

        @case('gif')
            <path fill-rule="evenodd"
                  d="M4.5 3.75a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V6.75a3 3 0 0 0-3-3h-15Zm9 4.5a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0v-7.5Zm1.5 0a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 0 1.5H16.5v2.25H18a.75.75 0 0 1 0 1.5h-1.5v3a.75.75 0 0 1-1.5 0v-7.5ZM6.636 9.78c.404-.575.867-.78 1.25-.78s.846.205 1.25.78a.75.75 0 0 0 1.228-.863C9.738 8.027 8.853 7.5 7.886 7.5c-.966 0-1.852.527-2.478 1.417-.62.882-.908 2-.908 3.083 0 1.083.288 2.201.909 3.083.625.89 1.51 1.417 2.477 1.417.967 0 1.852-.527 2.478-1.417a.75.75 0 0 0 .136-.431V12a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0 0 1.5H9v1.648c-.37.44-.774.602-1.114.602-.383 0-.846-.205-1.25-.78C6.226 13.638 6 12.837 6 12c0-.837.226-1.638.636-2.22Z"
                  clip-rule="evenodd"/>
            @break

        @case('gift')
            <path
                d="M9.375 3a1.875 1.875 0 0 0 0 3.75h1.875v4.5H3.375A1.875 1.875 0 0 1 1.5 9.375v-.75c0-1.036.84-1.875 1.875-1.875h3.193A3.375 3.375 0 0 1 12 2.753a3.375 3.375 0 0 1 5.432 3.997h3.943c1.035 0 1.875.84 1.875 1.875v.75c0 1.036-.84 1.875-1.875 1.875H12.75v-4.5h1.875a1.875 1.875 0 1 0-1.875-1.875V6.75h-1.5V4.875C11.25 3.839 10.41 3 9.375 3ZM11.25 12.75H3v6.75a2.25 2.25 0 0 0 2.25 2.25h6v-9ZM12.75 12.75v9h6.75a2.25 2.25 0 0 0 2.25-2.25v-6.75h-9Z"/>
            @break

        @case('microphone')
            <path d="M8.25 4.5a3.75 3.75 0 1 1 7.5 0v8.25a3.75 3.75 0 1 1-7.5 0V4.5Z"/>
            <path
                d="M6 10.5a.75.75 0 0 1 .75.75v1.5a5.25 5.25 0 1 0 10.5 0v-1.5a.75.75 0 0 1 1.5 0v1.5a6.751 6.751 0 0 1-6 6.709v2.291h3a.75.75 0 0 1 0 1.5h-7.5a.75.75 0 0 1 0-1.5h3v-2.291a6.751 6.751 0 0 1-6-6.709v-1.5A.75.75 0 0 1 6 10.5Z"/>
            @break

        @case('megaphone')
            <path
                d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z"/>
            @break

        @case('pencil')
            <path
                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z"/>
            @break

        @case('ascend')
            <path d="M17 19.4393L20.2197 16.2195C20.5125 15.9266 20.9874 15.9266 21.2803 16.2195C21.5732 16.5124 21.5732 16.9872 21.2803 17.2801L16.7803 21.7803C16.6397 21.921 16.4489 22 16.25 22C16.0511 22 15.8603 21.921 15.7197 21.7803L11.2197 17.2801C10.9268 16.9872 10.9268 16.5124 11.2197 16.2195C11.5126 15.9266 11.9875 15.9266 12.2803 16.2195L15.5 19.4393L15.5 2.74999C15.5 2.33578 15.8358 2 16.25 2C16.6642 2 17 2.33578 17 2.74999L17 19.4393ZM7.07179 2.00002C7.38266 2.00214 7.65999 2.19582 7.76903 2.48694L10.9526 10.9868C11.0978 11.3747 10.9012 11.807 10.5133 11.9522C10.1254 12.0975 9.69313 11.9008 9.54785 11.5129L8.79389 9.49991H5.23807L4.4489 11.5225C4.29834 11.9084 3.86347 12.0991 3.47759 11.9486C3.09171 11.798 2.90094 11.3632 3.0515 10.9773L6.36797 2.47738C6.48097 2.18777 6.76092 1.9979 7.07179 2.00002ZM7.05234 4.85005L5.82333 7.99993H8.23209L7.05234 4.85005ZM4.75049 12.9998C4.33628 12.9998 4.00049 13.3355 4.00049 13.7497C4.00049 14.164 4.33628 14.4997 4.75049 14.4997H8.13773L4.11687 20.8485C3.97057 21.0795 3.96158 21.3718 4.09343 21.6114C4.22527 21.8509 4.47704 21.9997 4.75049 21.9997H9.50049C9.9147 21.9997 10.2505 21.664 10.2505 21.2498C10.2505 20.8355 9.9147 20.4998 9.50049 20.4998H6.11324L10.1341 14.151C10.2804 13.92 10.2894 13.6277 10.1576 13.3881C10.0257 13.1486 9.77393 12.9998 9.50049 12.9998H4.75049Z" fill="#212121"/>
            @break

        @case('descend')
            <path d="M4.75 2C4.33579 2 4 2.33578 4 2.74999C4 3.1642 4.33579 3.49998 4.75 3.49998H8.13725L4.11638 9.84872C3.97008 10.0797 3.96109 10.3721 4.09294 10.6116C4.22478 10.8512 4.47656 11 4.75 11H9.5C9.91421 11 10.25 10.6642 10.25 10.25C10.25 9.83579 9.91421 9.50001 9.5 9.50001H6.11275L10.1336 3.15127C10.2799 2.92026 10.2889 2.62794 10.1571 2.38838C10.0252 2.14882 9.77345 2 9.5 2H4.75ZM7.07179 11.9999C6.76092 11.9978 6.48097 12.1877 6.36797 12.4773L3.0515 20.9772C2.90094 21.363 3.09171 21.7979 3.47759 21.9485C3.86347 22.099 4.29834 21.9083 4.4489 21.5224L5.23807 19.4998H8.79389L9.54785 21.5128C9.69313 21.9007 10.1254 22.0974 10.5133 21.9521C10.9012 21.8068 11.0978 21.3746 10.9526 20.9867L7.76903 12.4868C7.65999 12.1957 7.38266 12.002 7.07179 11.9999ZM7.05234 14.8499L8.23209 17.9998H5.82333L7.05234 14.8499ZM11.2197 16.2195C11.5126 15.9266 11.9875 15.9266 12.2803 16.2195L15.5 19.4393L15.5 2.74999C15.5 2.33578 15.8358 2 16.25 2C16.6642 2 17 2.33578 17 2.74999L17 19.4393L20.2197 16.2195C20.5125 15.9266 20.9874 15.9266 21.2803 16.2195C21.5732 16.5124 21.5732 16.9872 21.2803 17.2801L16.7803 21.7803C16.6397 21.921 16.4489 22 16.25 22C16.0511 22 15.8603 21.921 15.7197 21.7803L11.2197 17.2801C10.9268 16.9872 10.9268 16.5124 11.2197 16.2195Z" fill="#212121"/>
            @break

        @case('back-space')
        @case('back-space')
        @case('back-space')

        @default
            Default case...

    @endswitch

        </svg>
</span>
