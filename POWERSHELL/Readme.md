First Program in Windows PowerShell. Hello World Program will display simple "Hello World" on screen.
Step 1: Open a Notepad and save that file with name "HelloWorld.PS1"

PowerShell files are stored as extension .PS1

Step 2: Type following commands in notepad and save that file.
$strString = "Hello World"
write-host $strString

Step 3: Open PowerShell
Start button > All Programs > Windows PowerShell

Step 4: Type Path of "HelloWorld.PS1" to open file.
Example: On my PC i have saved file at following path.
C:\MyPowerShell\HelloWorld.PS1

Step 5: How to run Script successfully.
I have received following error on opening "HelloWorld.PS1" file on PowerShell screen.

PS C:\Users\shriganesh> c:\MyPowerShell\HelloWorld.ps1
File C:\MyPowerShell\HelloWorld.ps1 cannot be loaded because the execution of scripts is disabled on this system. Please see "get-help about_signing" for more details.
At line:1 char:30

- c:\MyPowerShell\HelloWorld.ps1 <<<<
  PS C:\Users\shriganesh>

Cause of Error:
The security settings built into Windows PowerShell include something called the “execution policy;” the execution policy determines how (or if) PowerShell runs scripts. By default, PowerShell’s execution policy is set to Restricted; that means that scripts - including those you write yourself - won’t run. Period.

You can verify the settings for your execution policy by typing the following at the PowerShell command prompt and then pressing ENTER:
PS C:\Users\shriganesh> Get-ExecutionPolicy
Restricted

Solution
If you don’t like the default execution policy (and you probably won’t) then just go ahead and change it. For example, suppose you want to configure PowerShell to run - without question - any scripts that you write yourself, but to run scripts downloaded from the Internet only if those scripts have been signed by a trusted publisher. In that case, use this command to set your execution policy to RemoteSigned.

Type following command on powershell screen.
PS C:\Users\shriganesh> Set-ExecutionPolicy unrestricted
Set-ExecutionPolicy : Access to the registry key 'HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\PowerShell\1\ShellIds\Microsoft.PowerShell' is denied.
At line:1 char:20

- Set-ExecutionPolicy <<<< unrestricted

I ran into one more error, this time i was not allowed to change default execution policy. To resolve this error, you need to open windows powershell as administrator on your windows vista OS.

Type following command after login as administrator
PS C:\Windows\System32> Set-ExecutionPolicy RemoteSigned
PS C:\Windows\System32>

Now lets close Windows Powershell screen as administrator and open again without run as administrator.

This time HelloWorld.PS1 would execute and display "Hello World" on PowerShell Screen.
PS C:\Users\shriganesh> c:\MyPowerShell\HelloWorld.PS1
Hello World
