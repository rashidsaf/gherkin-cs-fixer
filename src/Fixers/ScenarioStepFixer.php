<?php declare(strict_types=1);

namespace BehatCsFixer\Fixers;

/**
 * Fixer class for Scenario keyword.
 */
class ScenarioStepFixer extends StepFixer
{
    protected $padding = 2;
    protected $keyword = 'Scenario';
}
