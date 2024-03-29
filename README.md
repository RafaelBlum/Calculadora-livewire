<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
	<a href="#"  target="_blank" title="calculadora com livewire">
		<img src="gifs/git-calculator.gif" alt="calculadora com livewire" style="border-radius: 5px;" width="400">
	</a>
</p>

<p align="center">
	<img src="https://img.shields.io/badge/version project-1.0-brightgreen" alt="version project">
    <img src="https://img.shields.io/badge/Php-8.2-informational&color=brightgreen" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=Laravel&message=9.52.5&color=brightgreen?style=for-the-badge" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=Livewire&message=2.12&color=brightgreen?style=for-the-badge" alt="stack project">
	<a href="https://opensource.org/licenses/GPL-3.0">
		<img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="GPLv3 License">
	</a>
</p>

## _Projeto calculadora_

Este é uma `aplicação Laravel` utilizando a "extensão" `Livewire`. Uma extensão reativa, que agiliza o desenvolvimento
com `componentes reativo` "sem" o uso de javascript (Existe o javascript, mas não precisamos se preocupar com  desenvolvimento).

> Com **livewire** temos componentes responsivos e juntamente com o blade, temos uma ferramenta poderosa. Componentes que podemos atualizar sem
>precisar atualizar toda página de forma fácil e rápida.

##### Instalações
- [--] composer create-project laravel/laravel name-project
- [--] composer require livewire/livewire

##### Comandos
- `php artisan serve --port=8000` [inicializando servidor] 
- `php artisan livewire:make Calculator ` [Criando componente calculadora] 


######  Tecnologias (serviços externos, libs, frameworks, hospedagem etc.)

- <a href="#" target="_blank">Php `8.2`</a>
- <a href="#" target="_blank">Laravel `9.52.5`</a>
- <a href="#" target="_blank">Livewire `2.12`</a>

## Desenvolvimento (lógica)

`View blade *calculator*`
~~~~~~view
<input type="text" class="values" wire:model="tot" disabled="">
<input type="text" class="values" value="{{$math}}" placeholder="0">
~~~~~~

| Diretiva | Explicação |
| :---         |     :---      |
| `wire:model` | *Recebe uma propriedade "tot" pública da classe do componente, e toda vez que um elemento de entrada com esta diretiva é atualizado, a propriedade sincroniza com seu valor* |
| `wire:click` | *Escuta um evento "click" e aciona o método "math" no componente.* |


~~~~~~
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
        <input type="button" name="" wire:click="result" value="=" class="global green white-text big top-margin result" >
    </div>
</div>
~~~~~~

`Controller *Calculator*`
~~~~~~Calculator
    public $math = '';
    public $tot = 0;

    public function render()
    {
        return view('livewire.calculator', [
            "title" => "Calculadora"
        ]);
    }

    public function addMath($num)
    {
        $this->math .= $num;
    }

    public function result()
    {
        $this->tot = eval('return ' . $this->math . ';');
    }

    public function clear()
    {
        $this->math = '';
        $this->tot = 0;
    }
~~~~~~

| Classe | Explicação |
| :---         |     :---      |
| `public $math` | *As propriedades nos componentes sempre precisamos declarar como públicas* |
| `function render` | *Metodo **render** é como se fosse um metodo construtor de uma classe Php e renderiza a view blade e podemos passar variáveis. * |

##### Exemplos 1
Componente de descrição em um input com reatividade. A variável `pública` no controller do componente.
~~~~~~exemplo
{{$description}}
<input type="text" class="values" wire:model="description">
~~~~~~

<p align="center">
	<a href="#" title="input-com-reatividade">
		<img src="gifs/git-component.gif" alt="calculadora com livewire" width="150">
	</a>
</p>

##### Exemplos 2
Componente de botão com reatividade de somar e diminuir. wire:click acessa o metodo no controller do componente.
~~~~~~button
{{$number}} <br>
<button type="button" class="values" wire:click="addPlus">Somar</button>
<button type="button" class="values" wire:click="addMinus">Subtrair</button>
~~~~~~

~~~~~~metodos
    public function addPlus()
    {
        $this->number++;
    }
    
    public function addMinus()
    {
        $this->number--;
    }
~~~~~~

<p align="center">
	<a href="#" title="input-com-reatividade">
		<img src="gifs/git-component-button.gif" alt="calculadora com livewire" width="350">
	</a>
</p>

## Contatos

- 👇🏼 [rafaelblum_digital@hotmail.com]

[![Youtube Badge](https://img.shields.io/badge/-Youtube-FF0000?style=flat-square&labelColor=FF0000&logo=youtube&logoColor=white&link=https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)](https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)
[![Instagram Badge](https://img.shields.io/badge/-rafablum_-violet?style=flat-square&logo=Instagram&logoColor=white&link=https://www.instagram.com/rafablum_/)](https://www.instagram.com/rafablum_/)
[![Twitter: universoCode](https://img.shields.io/twitter/follow/universoCode?style=social)](https://twitter.com/universoCode)
[![Linkedin: RafaelBlum](https://img.shields.io/badge/-RafaelBlum-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/rafael-blum-378656285/)](https://www.linkedin.com/in/rafael-blum-378656285/)
[![GitHub RafaelBlum](https://img.shields.io/github/followers/RafaelBlum?label=follow&style=social)](https://github.com/RafaelBlum)


<img src="https://media.giphy.com/media/LnQjpWaON8nhr21vNW/giphy.gif" width="60"> 
    <em><b>Adoro me conectar com pessoas diferentes,</b> então se você quiser dizer <b>oi, ficarei feliz em conhecê-lo mais!</b> :)</em>

