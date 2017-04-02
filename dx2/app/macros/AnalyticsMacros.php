<?php

	use Latte\MacroNode;
	use Latte\PhpWriter;

	class AnalyticsMacros extends Latte\Macros\MacroSet{

		    public static function install(Latte\Compiler $compiler)
		    {
		        $set = new static($compiler);
		        $set->addMacro('gevent', NULL, NULL, array($set, 'macroGEvent'));
		    }

		    /**
		     * n:gevent="..."
		     */
		    public function macroGEvent(MacroNode $node, PhpWriter $writer)
		    {

		        $cmd = '

			$attributes = %node.array;

			if(is_array($attributes) && count($attributes) > 2){
			    echo \' data-gaevent="\'. $attributes[0] .\'"\';
				echo \' data-gacategory="\'. $attributes[1] .\'"\';
				echo \' data-gaaction="\'. $attributes[2] .\'"\';

				if( isset($attributes[2]) && $attributes[3] != \'\'){
					echo \' data-galabel="\'.$attributes[3].\'" \';
				}

				if( isset($attributes[4]) && $attributes[4] != \'\'){
					echo \' data-gavalue="\'.$attributes[4].\'" \';
				}
			}
		        ';

		        return $writer->write($cmd);
		    }

	}
