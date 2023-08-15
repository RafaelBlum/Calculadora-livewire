<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
	<a href="#"  target="_blank" title="calculadora com livewire">
		<img src="calculator-img.jpg" alt="calculadora com livewire" style="border-radius: 5px;" width="400">
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
- ` ` [--] 
- ` ` [--] 
- ` ` [--] 
- ` ` [--] 



######  Tecnologias (serviços externos, libs, frameworks, hospedagem etc.)

- <a href="#" target="_blank">Php `8.2`</a>
- <a href="#" target="_blank">Laravel `9.52.5`</a>
- <a href="#" target="_blank">Livewire `2.12`</a>


## Exemplos
Componente de descrição em um input com reatividade. A variável `pública` no controller do componente.
~~~~~~exemplo
{{$description}}
<input type="text" class="values" wire:model="description">
~~~~~~

<p align="center">
	<a href="#" title="input-com-reatividade">
		<img src="git-component.gif" alt="calculadora com livewire" width="150">
	</a>
</p>

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
		<img src="git-component-button.gif" alt="calculadora com livewire" width="350">
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

