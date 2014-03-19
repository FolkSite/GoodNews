<?php
/**
 * GoodNews
 *
 * Copyright 2012 by bitego <office@bitego.com>
 *
 * GoodNews is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * GoodNews is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this software; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

/**
 * Add resource documents to package
 * 
 * @package goodnews
 * @subpackage build
 */

$resources = array();
$i = 0;
$epoch = time();

$resources[++$i] = $modx->newObject('modResource');
$resources[$i]->fromArray(array (
    'id'                    => $i,
    'type'                  => 'document',
    'contentType'           => 'text/html',
    'pagetitle'             => 'Subscription Confirm',
    'longtitle'             => '',
    'description'           => '',
    'alias'                 => 'subscription-confirm',
    'link_attributes'       => '',
    'published'             => 1,
    'pub_date'              => 0,
    'unpub_date'            => 0,
    'parent'                => 0,
    'isfolder'              => 0,
    'introtext'             => '',
    'richtext'              => 0,
    'template'              => 0,
    'menuindex'             => 0,
    'searchable'            => 0,
    'cacheable'             => 1,
    'createdby'             => 0,
    'createdon'             => $epoch,
    'editedby'              => 0,
    'editedon'              => $epoch,
    'deleted'               => 0,
    'deletedon'             => 0,
    'deletedby'             => 0,
    'publishedon'           => $epoch,
    'publishedby'           => 0,
    'menutitle'             => '',
    'donthit'               => 0,
    'privateweb'            => 0,
    'privatemgr'            => 0,
    'content_dispo'         => 0,
    'hidemenu'              => 1,
    'class_key'             => 'modDocument',
    'context_key'           => 'web',
    'content_type'          => 1,
    'uri'                   => '',
    'uri_override'          => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree'          => 1,
    'properties'            => NULL,
), '', true, true);
$resources[$i]->setContent(file_get_contents($sources['resources'].'sample.subscription-confirm.resource.tpl'));

$resources[++$i] = $modx->newObject('modResource');
$resources[$i]->fromArray(array (
    'id'                    => $i,
    'type'                  => 'document',
    'contentType'           => 'text/html',
    'pagetitle'             => 'Subscription Mail Sent',
    'longtitle'             => '',
    'description'           => '',
    'alias'                 => 'subscription-mail-sent',
    'link_attributes'       => '',
    'published'             => 1,
    'pub_date'              => 0,
    'unpub_date'            => 0,
    'parent'                => 0,
    'isfolder'              => 0,
    'introtext'             => '',
    'richtext'              => 0,
    'template'              => 0,
    'menuindex'             => 0,
    'searchable'            => 0,
    'cacheable'             => 1,
    'createdby'             => 0,
    'createdon'             => $epoch,
    'editedby'              => 0,
    'editedon'              => $epoch,
    'deleted'               => 0,
    'deletedon'             => 0,
    'deletedby'             => 0,
    'publishedon'           => $epoch,
    'publishedby'           => 0,
    'menutitle'             => '',
    'donthit'               => 0,
    'privateweb'            => 0,
    'privatemgr'            => 0,
    'content_dispo'         => 0,
    'hidemenu'              => 1,
    'class_key'             => 'modDocument',
    'context_key'           => 'web',
    'content_type'          => 1,
    'uri'                   => '',
    'uri_override'          => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree'          => 1,
    'properties'            => NULL,
), '', true, true);
$resources[$i]->setContent(file_get_contents($sources['resources'].'sample.subscription-mail-sent.resource.tpl'));

$resources[++$i] = $modx->newObject('modResource');
$resources[$i]->fromArray(array (
    'id'                    => $i,
    'type'                  => 'document',
    'contentType'           => 'text/html',
    'pagetitle'             => 'Subscription Success',
    'longtitle'             => '',
    'description'           => '',
    'alias'                 => 'subscription-success',
    'link_attributes'       => '',
    'published'             => 1,
    'pub_date'              => 0,
    'unpub_date'            => 0,
    'parent'                => 0,
    'isfolder'              => 0,
    'introtext'             => '',
    'richtext'              => 0,
    'template'              => 0,
    'menuindex'             => 0,
    'searchable'            => 0,
    'cacheable'             => 1,
    'createdby'             => 0,
    'createdon'             => $epoch,
    'editedby'              => 0,
    'editedon'              => $epoch,
    'deleted'               => 0,
    'deletedon'             => 0,
    'deletedby'             => 0,
    'publishedon'           => $epoch,
    'publishedby'           => 0,
    'menutitle'             => '',
    'donthit'               => 0,
    'privateweb'            => 0,
    'privatemgr'            => 0,
    'content_dispo'         => 0,
    'hidemenu'              => 1,
    'class_key'             => 'modDocument',
    'context_key'           => 'web',
    'content_type'          => 1,
    'uri'                   => '',
    'uri_override'          => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree'          => 1,
    'properties'            => NULL,
), '', true, true);
$resources[$i]->setContent(file_get_contents($sources['resources'].'sample.subscription-success.resource.tpl'));

$resources[++$i] = $modx->newObject('modResource');
$resources[$i]->fromArray(array (
    'id'                    => $i,
    'type'                  => 'document',
    'contentType'           => 'text/html',
    'pagetitle'             => 'Subscription Update',
    'longtitle'             => '',
    'description'           => '',
    'alias'                 => 'subscription-update',
    'link_attributes'       => '',
    'published'             => 1,
    'pub_date'              => 0,
    'unpub_date'            => 0,
    'parent'                => 0,
    'isfolder'              => 0,
    'introtext'             => '',
    'richtext'              => 0,
    'template'              => 0,
    'menuindex'             => 0,
    'searchable'            => 0,
    'cacheable'             => 1,
    'createdby'             => 0,
    'createdon'             => $epoch,
    'editedby'              => 0,
    'editedon'              => $epoch,
    'deleted'               => 0,
    'deletedon'             => 0,
    'deletedby'             => 0,
    'publishedon'           => $epoch,
    'publishedby'           => 0,
    'menutitle'             => '',
    'donthit'               => 0,
    'privateweb'            => 0,
    'privatemgr'            => 0,
    'content_dispo'         => 0,
    'hidemenu'              => 1,
    'class_key'             => 'modDocument',
    'context_key'           => 'web',
    'content_type'          => 1,
    'uri'                   => '',
    'uri_override'          => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree'          => 1,
    'properties'            => NULL,
), '', true, true);
$resources[$i]->setContent(file_get_contents($sources['resources'].'sample.subscription-update.resource.tpl'));

$resources[++$i] = $modx->newObject('modResource');
$resources[$i]->fromArray(array (
    'id'                    => $i,
    'type'                  => 'document',
    'contentType'           => 'text/html',
    'pagetitle'             => 'Subscription',
    'longtitle'             => '',
    'description'           => '',
    'alias'                 => 'subscription',
    'link_attributes'       => '',
    'published'             => 1,
    'pub_date'              => 0,
    'unpub_date'            => 0,
    'parent'                => 0,
    'isfolder'              => 0,
    'introtext'             => '',
    'richtext'              => 0,
    'template'              => 0,
    'menuindex'             => 0,
    'searchable'            => 0,
    'cacheable'             => 1,
    'createdby'             => 0,
    'createdon'             => $epoch,
    'editedby'              => 0,
    'editedon'              => $epoch,
    'deleted'               => 0,
    'deletedon'             => 0,
    'deletedby'             => 0,
    'publishedon'           => $epoch,
    'publishedby'           => 0,
    'menutitle'             => '',
    'donthit'               => 0,
    'privateweb'            => 0,
    'privatemgr'            => 0,
    'content_dispo'         => 0,
    'hidemenu'              => 1,
    'class_key'             => 'modDocument',
    'context_key'           => 'web',
    'content_type'          => 1,
    'uri'                   => '',
    'uri_override'          => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree'          => 1,
    'properties'            => NULL,
), '', true, true);
$resources[$i]->setContent(file_get_contents($sources['resources'].'sample.subscription.resource.tpl'));

$resources[++$i] = $modx->newObject('modResource');
$resources[$i]->fromArray(array (
    'id'                    => $i,
    'type'                  => 'document',
    'contentType'           => 'text/html',
    'pagetitle'             => 'Unsubscribe',
    'longtitle'             => '',
    'description'           => '',
    'alias'                 => 'unsubscribe',
    'link_attributes'       => '',
    'published'             => 1,
    'pub_date'              => 0,
    'unpub_date'            => 0,
    'parent'                => 0,
    'isfolder'              => 0,
    'introtext'             => '',
    'richtext'              => 0,
    'template'              => 0,
    'menuindex'             => 0,
    'searchable'            => 0,
    'cacheable'             => 1,
    'createdby'             => 0,
    'createdon'             => $epoch,
    'editedby'              => 0,
    'editedon'              => $epoch,
    'deleted'               => 0,
    'deletedon'             => 0,
    'deletedby'             => 0,
    'publishedon'           => $epoch,
    'publishedby'           => 0,
    'menutitle'             => '',
    'donthit'               => 0,
    'privateweb'            => 0,
    'privatemgr'            => 0,
    'content_dispo'         => 0,
    'hidemenu'              => 1,
    'class_key'             => 'modDocument',
    'context_key'           => 'web',
    'content_type'          => 1,
    'uri'                   => '',
    'uri_override'          => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree'          => 1,
    'properties'            => NULL,
), '', true, true);
$resources[$i]->setContent(file_get_contents($sources['resources'].'sample.unsubscribe.resource.tpl'));

return $resources;
