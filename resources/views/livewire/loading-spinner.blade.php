    <div class="spinner" wire:loading.flex>
        <span class="loader"></span>
    </div>

    <style>
        .loader {
            width: 48px;
            height: 48px;
            border: 3px solid #FFF;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        .spinner {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.253);
            width: 100%;
            height: 100%;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            display: none
        }

        .loader::after {
            content: '';
            box-sizing: border-box;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 56px;
            height: 56px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-bottom-color: #FF3D00;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
