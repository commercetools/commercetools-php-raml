<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\ProductTypeUpdateBuilder;
use Commercetools\Types\ProductType\ProductTypeAddAttributeDefinitionAction;
use Commercetools\Types\ProductType\ProductTypeAddLocalizedEnumValueAction;
use Commercetools\Types\ProductType\ProductTypeAddPlainEnumValueAction;
use Commercetools\Types\ProductType\ProductTypeChangeAttributeConstraintAction;
use Commercetools\Types\ProductType\ProductTypeChangeAttributeOrderAction;
use Commercetools\Types\ProductType\ProductTypeChangeDescriptionAction;
use Commercetools\Types\ProductType\ProductTypeChangeInputHintAction;
use Commercetools\Types\ProductType\ProductTypeChangeIsSearchableAction;
use Commercetools\Types\ProductType\ProductTypeChangeLabelAction;
use Commercetools\Types\ProductType\ProductTypeChangeLocalizedEnumValueLabelAction;
use Commercetools\Types\ProductType\ProductTypeChangeLocalizedEnumValueOrderAction;
use Commercetools\Types\ProductType\ProductTypeChangeNameAction;
use Commercetools\Types\ProductType\ProductTypeChangePlainEnumValueLabelAction;
use Commercetools\Types\ProductType\ProductTypeChangePlainEnumValueOrderAction;
use Commercetools\Types\ProductType\ProductTypeRemoveAttributeDefinitionAction;
use Commercetools\Types\ProductType\ProductTypeSetInputTipAction;
use Commercetools\Types\ProductType\ProductTypeSetKeyAction;
use Commercetools\Types\ProductType\ProductType;
use Commercetools\Types\ProductType\ProductTypeUpdate;
use Commercetools\Request\ByProjectKeyProductTypesByIDPost;

use Commercetools\Types\ProductType\ProductTypeAddAttributeDefinitionActionModel;
use Commercetools\Types\ProductType\ProductTypeAddLocalizedEnumValueActionModel;
use Commercetools\Types\ProductType\ProductTypeAddPlainEnumValueActionModel;
use Commercetools\Types\ProductType\ProductTypeChangeAttributeConstraintActionModel;
use Commercetools\Types\ProductType\ProductTypeChangeAttributeOrderActionModel;
use Commercetools\Types\ProductType\ProductTypeChangeDescriptionActionModel;
use Commercetools\Types\ProductType\ProductTypeChangeInputHintActionModel;
use Commercetools\Types\ProductType\ProductTypeChangeIsSearchableActionModel;
use Commercetools\Types\ProductType\ProductTypeChangeLabelActionModel;
use Commercetools\Types\ProductType\ProductTypeChangeLocalizedEnumValueLabelActionModel;
use Commercetools\Types\ProductType\ProductTypeChangeLocalizedEnumValueOrderActionModel;
use Commercetools\Types\ProductType\ProductTypeChangeNameActionModel;
use Commercetools\Types\ProductType\ProductTypeChangePlainEnumValueLabelActionModel;
use Commercetools\Types\ProductType\ProductTypeChangePlainEnumValueOrderActionModel;
use Commercetools\Types\ProductType\ProductTypeRemoveAttributeDefinitionActionModel;
use Commercetools\Types\ProductType\ProductTypeSetInputTipActionModel;
use Commercetools\Types\ProductType\ProductTypeSetKeyActionModel;

use PHPUnit\Framework\TestCase;

class ProductTypeBuilderTest extends TestCase {
    public function testAddAttributeDefinitionCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->addAttributeDefinition(function ($action) { static::assertInstanceOf(ProductTypeAddAttributeDefinitionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeAddAttributeDefinitionAction::class, $update->getActions()->current());
    }

    public function testAddAttributeDefinitionInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->addAttributeDefinition(new ProductTypeAddAttributeDefinitionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeAddAttributeDefinitionAction::class, $update->getActions()->current());
    }

    public function testAddLocalizedEnumValueCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->addLocalizedEnumValue(function ($action) { static::assertInstanceOf(ProductTypeAddLocalizedEnumValueAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeAddLocalizedEnumValueAction::class, $update->getActions()->current());
    }

    public function testAddLocalizedEnumValueInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->addLocalizedEnumValue(new ProductTypeAddLocalizedEnumValueActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeAddLocalizedEnumValueAction::class, $update->getActions()->current());
    }

    public function testAddPlainEnumValueCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->addPlainEnumValue(function ($action) { static::assertInstanceOf(ProductTypeAddPlainEnumValueAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeAddPlainEnumValueAction::class, $update->getActions()->current());
    }

    public function testAddPlainEnumValueInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->addPlainEnumValue(new ProductTypeAddPlainEnumValueActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeAddPlainEnumValueAction::class, $update->getActions()->current());
    }

    public function testChangeAttributeConstraintCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeAttributeConstraint(function ($action) { static::assertInstanceOf(ProductTypeChangeAttributeConstraintAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeAttributeConstraintAction::class, $update->getActions()->current());
    }

    public function testChangeAttributeConstraintInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeAttributeConstraint(new ProductTypeChangeAttributeConstraintActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeAttributeConstraintAction::class, $update->getActions()->current());
    }

    public function testChangeAttributeOrderCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeAttributeOrder(function ($action) { static::assertInstanceOf(ProductTypeChangeAttributeOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeAttributeOrderAction::class, $update->getActions()->current());
    }

    public function testChangeAttributeOrderInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeAttributeOrder(new ProductTypeChangeAttributeOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeAttributeOrderAction::class, $update->getActions()->current());
    }

    public function testChangeDescriptionCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeDescription(function ($action) { static::assertInstanceOf(ProductTypeChangeDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeDescriptionAction::class, $update->getActions()->current());
    }

    public function testChangeDescriptionInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeDescription(new ProductTypeChangeDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeDescriptionAction::class, $update->getActions()->current());
    }

    public function testChangeInputHintCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeInputHint(function ($action) { static::assertInstanceOf(ProductTypeChangeInputHintAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeInputHintAction::class, $update->getActions()->current());
    }

    public function testChangeInputHintInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeInputHint(new ProductTypeChangeInputHintActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeInputHintAction::class, $update->getActions()->current());
    }

    public function testChangeIsSearchableCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeIsSearchable(function ($action) { static::assertInstanceOf(ProductTypeChangeIsSearchableAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeIsSearchableAction::class, $update->getActions()->current());
    }

    public function testChangeIsSearchableInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeIsSearchable(new ProductTypeChangeIsSearchableActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeIsSearchableAction::class, $update->getActions()->current());
    }

    public function testChangeLabelCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeLabel(function ($action) { static::assertInstanceOf(ProductTypeChangeLabelAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeLabelAction::class, $update->getActions()->current());
    }

    public function testChangeLabelInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeLabel(new ProductTypeChangeLabelActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeLabelAction::class, $update->getActions()->current());
    }

    public function testChangeLocalizedEnumValueLabelCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeLocalizedEnumValueLabel(function ($action) { static::assertInstanceOf(ProductTypeChangeLocalizedEnumValueLabelAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeLocalizedEnumValueLabelAction::class, $update->getActions()->current());
    }

    public function testChangeLocalizedEnumValueLabelInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeLocalizedEnumValueLabel(new ProductTypeChangeLocalizedEnumValueLabelActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeLocalizedEnumValueLabelAction::class, $update->getActions()->current());
    }

    public function testChangeLocalizedEnumValueOrderCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeLocalizedEnumValueOrder(function ($action) { static::assertInstanceOf(ProductTypeChangeLocalizedEnumValueOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeLocalizedEnumValueOrderAction::class, $update->getActions()->current());
    }

    public function testChangeLocalizedEnumValueOrderInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeLocalizedEnumValueOrder(new ProductTypeChangeLocalizedEnumValueOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeLocalizedEnumValueOrderAction::class, $update->getActions()->current());
    }

    public function testChangeNameCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeName(function ($action) { static::assertInstanceOf(ProductTypeChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changeName(new ProductTypeChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangePlainEnumValueLabelCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changePlainEnumValueLabel(function ($action) { static::assertInstanceOf(ProductTypeChangePlainEnumValueLabelAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangePlainEnumValueLabelAction::class, $update->getActions()->current());
    }

    public function testChangePlainEnumValueLabelInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changePlainEnumValueLabel(new ProductTypeChangePlainEnumValueLabelActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangePlainEnumValueLabelAction::class, $update->getActions()->current());
    }

    public function testChangePlainEnumValueOrderCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changePlainEnumValueOrder(function ($action) { static::assertInstanceOf(ProductTypeChangePlainEnumValueOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangePlainEnumValueOrderAction::class, $update->getActions()->current());
    }

    public function testChangePlainEnumValueOrderInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->changePlainEnumValueOrder(new ProductTypeChangePlainEnumValueOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeChangePlainEnumValueOrderAction::class, $update->getActions()->current());
    }

    public function testRemoveAttributeDefinitionCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->removeAttributeDefinition(function ($action) { static::assertInstanceOf(ProductTypeRemoveAttributeDefinitionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeRemoveAttributeDefinitionAction::class, $update->getActions()->current());
    }

    public function testRemoveAttributeDefinitionInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->removeAttributeDefinition(new ProductTypeRemoveAttributeDefinitionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeRemoveAttributeDefinitionAction::class, $update->getActions()->current());
    }

    public function testSetInputTipCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->setInputTip(function ($action) { static::assertInstanceOf(ProductTypeSetInputTipAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeSetInputTipAction::class, $update->getActions()->current());
    }

    public function testSetInputTipInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->setInputTip(new ProductTypeSetInputTipActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeSetInputTipAction::class, $update->getActions()->current());
    }

    public function testSetKeyCallback() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->setKey(function ($action) { static::assertInstanceOf(ProductTypeSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInstance() {
        $builder = new ProductTypeUpdateBuilder();
        $builder->setKey(new ProductTypeSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductTypeUpdate::class, $update);
        static::assertInstanceOf(ProductTypeSetKeyAction::class, $update->getActions()->current());
    }

}
