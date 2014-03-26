<?php

namespace Sfive\Plugin;

/**
 * Events can be called on several occasions when s9y performs an action.
 * One or multiple plugin can be registered for each of those hooks.
 */
abstract class AbstractEvent extends \Sfive\Plugin\AbstractPlugin
{
    /**
     * Gets a reference to an $entry / $eventData array pointer, interacting with Cache-Options
     *
     * This function is used by specific event plugins that require to properly get a reference
     * to the 'extended' or 'body' field of an entry superarray. If they would immediately operate
     * on the 'body' field, it might get overwritten by other plugins later on.
     *
     * @param   string      The fieldname to get a reference for
     * @param   array       The entry superarray to get the reference from
     *
     * @return  array       The value of the array for the fieldname (reference)
     */
    public function getFieldReference($fieldname = 'body', array $eventData)
    {
        // Get a reference to a content field (body/extended) of
        // $entries input data. This is a unifying function because
        // several plugins are using similar fields.

        if (is_array($eventData)
            && isset($eventData[0])
            && is_array($eventData[0])
            && is_array($eventData[0]['properties'])
        ) {
            if (!empty($eventData[0]['properties']['ep_cache_' . $fieldname])) {

                // It may happen that there is no extended entry to concatenate to. In that case,
                // create a dummy extended entry.
                if (!isset($eventData[0]['properties']['ep_cache_' . $fieldname])) {
                    $eventData[0]['properties']['ep_cache_' . $fieldname] = '';
                }

                $key = &$eventData[0]['properties']['ep_cache_' . $fieldname];
            } else {
                $key = &$eventData[0][$fieldname];
            }
        } elseif (is_array($eventData) && is_array($eventData['properties'])) {
            if (!empty($eventData['properties']['ep_cache_' . $fieldname])) {
                $key = &$eventData['properties']['ep_cache_' . $fieldname];
            } else {
                $key = &$eventData[$fieldname];
            }
        } elseif (is_array($eventData[0]) && isset($eventData[0][$fieldname])) {
            $key = &$eventData[0][$fieldname];
        } elseif (isset($eventData[$fieldname])) {
            $key = &$eventData[$fieldname];
        } else {
            $key = '';
        }

        return $key;
    }

    /**
     * Main logic for making a plugin "listen" to an event
     *
     * This method is called by the main plugin API for every event, that is executed.
     * You need to implement each actions that shall be performed by your plugin here.
     *
     * @param   string      The name of the executed event
     * @param   object      A property bag for the current plugin
     * @param   mixed       Any referenced event data from the serendipity_plugin_api::hook_event() function
     * @param   mixed       Any additional data from the hook_event call
     * @return true
     */
    public function event_hook($event, $bag, $eventData, $addData = null)
    {
        // Define event hooks here, if you want you plugin to execute those instead of being a sidebar item.
        // Look at external plugins 'serendipity_event_mailer' or 'serendipity_event_weblogping' for usage.
        // Currently available events:
        //   backend_publish [after insertion of a new article in your s9y-backend]
        //   backend_display [after displaying an article in your s9y-backend]
        //   frontend_display [before displaying an article in your s9y-frontend]
        //   frontend_comment [after displaying the "enter comment" dialog]
        return true;
    }

}
