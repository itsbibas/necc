<div class="section-flex">
    <div class="flex-text-section">
        <span class="typing">
            <h1><?php echo $title ?></h1>
        </span>
    </div>
</div>

<style>
    .section-flex .flex-text-section .typing h1::before,
    .section-flex .flex-text-section .typing h1::before {
        content: '';
        height: 4px;
        position: absolute;
        top: 1;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .section-flex .flex-text-section .typing h1::before {
        background-color: white;
        animation: typing 2s forwards infinite;
    }

    @keyframes typing {
        to {
            left: 100%;
        }
    }
</style>