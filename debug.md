```php
if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

// Allow http for PHP wordpress.
define( 'FORCE_SSL_ADMIN', false );

// Allow debugging, and write log files with the `write_log` function to wp-content/debug.log.
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
```

## Debugging with gdb

```bash
$ sudo -s 
$ yum install gdb
$ ps -ef | grep httpd
$ gdb attach 2714
Missing separate debuginfos, use: debuginfo-install httpd24-2.4.41-1.88.amzn1.x86_64

# Follows the child process if it forks.
$ set follow-fork-mode child

# Continue.
$ c
$ backtrace
$ backtrace full
```
