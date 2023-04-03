<div class="flex space-x-3">
    <div class="shadow flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-12 lg:px-12 mardiv">
            <div class="flex justify-center mt-4 sm:items-center">
                <div class="ml-4 text-center text-sm dark:text-white sm:text-right sm:ml-0">
                    <h1>{{ $title }} livewire intro</h1>
                    <div class="container calc">
                        <div class="header">Calculator</div>

                        <input type="text" class="values" value="{{$math}}" placeholder="0">

                        <div class="first-row">
                            <input type="button" name="" wire:click="addMath('^')" value="&radic;" class="global">
                            <input type="button" name="" wire:click="addMath('(')" value="(" class="global">
                            <input type="button" name="" wire:click="addMath(')')" value=")" class="global">
                            <input type="button" name="" wire:click="addMath('%')" value="%" class="global">
                        </div>
                        <div class="second-row">
                            <input type="button" name="" wire:click="addMath(7)" value="7" class="global">
                            <input type="button" name="" wire:click="addMath(8)" value="8" class="global">
                            <input type="button" name="" wire:click="addMath(9)" value="9" class="global">
                            <input type="button"         wire:click="addMath('/')" name="" value="/" class="global">
                        </div>
                        <div class="third-row">
                            <input type="button" name="" wire:click="addMath(4)" value="4" class="global">
                            <input type="button" name="" wire:click="addMath(5)" value="5" class="global">
                            <input type="button" name="" wire:click="addMath(6)" value="6" class="global">
                            <input type="button" name="" wire:click="addMath('*')" value="X" class="global">
                        </div>
                        <div class="fourth-row">
                            <input type="button" name="" wire:click="addMath(1)" value="1" class="global">
                            <input type="button" name="" wire:click="addMath(2)" value="2" class="global">
                            <input type="button" name="" wire:click="addMath(3)" value="3" class="global">
                            <input type="button" name="" wire:click="addMath('-')" value="-" class="global">
                        </div>
                        <div class="conflict">
                            <div class="left">
                                <input type="button" name="" wire:click="addMath(0)" value="0" class="big global">
                                <input type="button" name="" wire:click="addMath('.')" value="." class="small global">
                                <input type="button" name="" wire:click="clear" value="Del" class="global red small white-text top-margin">
                                <input type="button" name="" wire:click="addMath('+')" value="+" class="global grey plus">
                            </div>
                            <div class="right">
                                <input type="button" name="" wire:click="result" value="=" class="global green white-text big top-margin result">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container ml-4 text-center text-sm dark:text-white sm:text-left sm:ml-0 mardiv">
        <?php if($error): ?>
        <p style="color: red; font-weight: 700;">Erro [ {{ $error }} ]</p>
        <?php endif; ?>
        <br>
        <hr>
        <div class="container calc">
            <input type="text" class="values" wire:model="tot" disabled="">
            <p>User: {{ $user->name }}</p>
        </div>
    </div>
</div>

