{extends file="main.tpl"}
{block name=content}
<section id="history">
    <div>
        {if $db->count("results")>0}
            <table
                <thead>
                <tr>
                    <th>Kwota</th>
                    <th>Ilość Miesięcy</th>
                    <th>Procent</th>
                    <th>Miesięczna rata</th>
                    <th>Data</th>
                </tr>
            </thead>
<tbody>
                {foreach $results as $r}
                    {strip}
                        <tr>
                            <td>{$r["sum"]} zł</td>
                            <td>{$r["months"]}</td>
                            <td>{$r["percent"]}%</td>
                            <td>{$r["result"]} zł</td>
                            <td>{$r["data"]}</td>
                        </tr>
                    {/strip}
                {/foreach}
                </tbody>
            </table>
            </div>
            <div>
            <br>
            <span style="float:right;">
            <a href="{$conf->app_url}/index.php" class="button primary" >Powrót</a>
	</span>
            {if inRole('admin')}
                <a href="{$conf->action_url}resultClear" class="button primary">Wyczyść</a><br><br>
            {/if}
        {else}
                <span style="float:right;">
            <a href="{$conf->app_url}/index.php" class="button primary" >Powrót</a>
{/if}

	</span>
    </div>
    </section>
{/block}
