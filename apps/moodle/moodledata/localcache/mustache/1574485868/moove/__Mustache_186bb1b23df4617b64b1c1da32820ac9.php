<?php

class __Mustache_186bb1b23df4617b64b1c1da32820ac9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="page-header" class="row">
';
        $buffer .= $indent . '    <div class="col-12 pt-3 pb-3">
';
        $buffer .= $indent . '        <div class="card ';
        // 'contextheader' inverted section
        $value = $context->find('contextheader');
        if (empty($value)) {
            
            $buffer .= 'border-0 bg-transparent';
        }
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="card-body ';
        // 'contextheader' inverted section
        $value = $context->find('contextheader');
        if (empty($value)) {
            
            $buffer .= 'p-2';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                <div class="d-flex">
';
        $buffer .= $indent . '                    <div class="mr-auto">
';
        $buffer .= $indent . '                        <h2>';
        $value = $this->resolveValue($context->find('contextheader'), $context);
        $buffer .= $value;
        $buffer .= '</h2>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="d-flex flex-wrap">
';
        // 'hasnavbar' section
        $value = $context->find('hasnavbar');
        $buffer .= $this->section0cfab5d9b41b9a13eee3763050c03dca($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</header>';

        return $buffer;
    }

    private function section0cfab5d9b41b9a13eee3763050c03dca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="page-navbar">
                        {{{navbar}}}
                    </div>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div id="page-navbar">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
