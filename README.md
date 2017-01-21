yii2-treetable
=============

Yii 2.0 implementation of tree table behavior using jquery-treetable plugin. Provides a Gridview like widget.
- jquery-treetable - http://ludo.cubicphuse.nl/jquery-treetable/

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require slatiusa/yii2-treetable
```

or add

```
"slatiusa/yii2-treetable": "*"
```

to the ```require``` section of your `composer.json` file.

## Usage

Use ```slatiusa\treetable\Treetable``` widget instead of a Yii Gridview.
The example below will collapse every even row in the table below the odd one above it.
```
    <?= Treetable::widget([
        'dataProvider' => $dataProvider,
        'rowOptions' => function($model, $key, $index, $grid) {
            if ($index % 2) {
                return ['data-tt-id' => $index, 'data-tt-parent-id' => $index-1];
            } else {
                return ['data-tt-id' => $index];
            }
        },
        'treetableOptions' => ['expandable' => true, 'indent' => 0],    //Pass configuration options to $().treetable()
        'columns' => [
            ...
        ]
    ]); ?>
```
Read the documentation on treetable (http://ludo.cubicphuse.nl/jquery-treetable/)
to understand how working with the ```data-tt-id``` and ```data-tt-parent-id```
can determine the nesting.
A function for ```rowOptions``` as shown above can work with your datamodel to
nest as you like.

## Tip

Not all CSS from treetable is included because it breaks heavilly with Bootstrap 
layout. A css example is included to style the expand/collapse ```<a>``` with an
image.
Take a look at the CSS provided with jquery-treetable for more inspiration.