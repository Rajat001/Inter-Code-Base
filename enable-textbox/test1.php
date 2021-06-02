 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
    <html>
      <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript">
            function Numeric()
            {
                var field=document.iform.mob.value;            
                if (!field.match(/^[\-\+]?[\d\,]*\.?[\d]*$/))
                {
                    alert("Enter only Numerics");
                    return false;
                }
            }
        </script>
      </head>
      <body>
          <form name="iform" method="post">
              Add Your Mobile Number: <input type="text" name="mob" />
              <br/>
              <input type="submit" value="OK" onclick="return Numeric();" />
          </form>
      </body>
    </html>