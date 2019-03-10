{include file='header.tpl'}
{include file='navbar.tpl'}

<h2 class="ui header">
  Account
</h2>

{if isset($ERROR)}
  <div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
      <div class="header">Error</div>
      {$ERROR}
    </div>
  </div>
{/if}

{if isset($MESSAGE_SENT)}
  <div class="ui success icon message">
    <i class="check icon"></i>
    <div class="content">
      <div class="header">Success</div>
      {$MESSAGE_SENT}
    </div>
  </div>
{/if}

<div class="ui stackable grid" id="view-message">
  <div class="ui centered row">
    <div class="ui six wide tablet four wide computer column">
      {include file='user/navigation.tpl'}
    </div>
    <div class="ui ten wide tablet twelve wide computer column">
      <div class="ui segment">
        <h3 class="ui header">
          {$MESSAGE_TITLE}
          <div class="sub header">{$PARTICIPANTS_TEXT}: {$PARTICIPANTS}</div>
        </h3>
      </div>
      {$PAGINATION}
      <div class="res right floated">
        <a class="ui small primary button" href="{$BACK_LINK}">{$BACK}</a>
        <a class="ui small negative button" href="{$LEAVE_CONVERSATION_LINK}" onclick="return confirm('{$CONFIRM_LEAVE}');">{$LEAVE_CONVERSATION}</a>
      </div>
      {foreach from=$MESSAGES item=message}
        <div class="ui fluid card" id="message">
          <div class="content">
            <img class="ui left floated mini circular image" src="{$message.author_avatar}">
            <div class="header">
              <a href="{$message.author_profile}" data-poload="{$USER_INFO_URL}{$message.author_id}">{$message.author_username}</a>
            </div>
            <div class="meta">
              {$message.message_date}
            </div>
            <div class="description">
              {$message.content}
            </div>
          </div>
        </div>
      {/foreach}
      {$PAGINATION}
      <div class="ui segment">
        <h3 class="ui header">{$NEW_REPLY}</h3>
        <form class="ui form" action="" method="post">
          {if isset($MARKDOWN)}
            <div class="field">
              <textarea name="content" id="markdown">{$CONTENT}</textarea>
            </div>
          {else}
            <div class="field">
              <textarea name="content" id="reply">{$CONTENT}</textarea>
            </div>
          {/if}
          <input type="hidden" name="token" value="{$TOKEN}">
          <input type="submit" class="ui primary button" name="{$SUBMIT}">
        </form>
      </div>
    </div>
  </div>
</div>

{include file='footer.tpl'}