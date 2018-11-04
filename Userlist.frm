VERSION 5.00
Object = "{CDE57A40-8B86-11D0-B3C6-00A0C90AEA82}#1.0#0"; "MSDATGRD.OCX"
Object = "{67397AA1-7FB1-11D0-B148-00A0C922E820}#6.0#0"; "MSADODC.OCX"
Begin VB.Form Userlist 
   Caption         =   "User list control"
   ClientHeight    =   3495
   ClientLeft      =   4545
   ClientTop       =   3825
   ClientWidth     =   6135
   Icon            =   "Userlist.frx":0000
   LinkTopic       =   "Form1"
   ScaleHeight     =   3495
   ScaleWidth      =   6135
   Begin VB.CommandButton cmdOk 
      Caption         =   "OK"
      Height          =   495
      Left            =   4560
      TabIndex        =   4
      Top             =   2760
      Width           =   1455
   End
   Begin VB.CommandButton cmdNext 
      Caption         =   "N&ext"
      Height          =   495
      Left            =   3120
      TabIndex        =   3
      Top             =   2760
      Width           =   1335
   End
   Begin VB.CommandButton cmdPrevious 
      Caption         =   "&Previous"
      Height          =   495
      Left            =   1680
      TabIndex        =   2
      Top             =   2760
      Width           =   1335
   End
   Begin MSAdodcLib.Adodc Adodc1 
      Height          =   330
      Left            =   3840
      Top             =   480
      Visible         =   0   'False
      Width           =   1935
      _ExtentX        =   3413
      _ExtentY        =   582
      ConnectMode     =   0
      CursorLocation  =   3
      IsolationLevel  =   -1
      ConnectionTimeout=   15
      CommandTimeout  =   30
      CursorType      =   3
      LockType        =   3
      CommandType     =   2
      CursorOptions   =   0
      CacheSize       =   50
      MaxRecords      =   0
      BOFAction       =   0
      EOFAction       =   0
      ConnectStringType=   1
      Appearance      =   1
      BackColor       =   -2147483643
      ForeColor       =   -2147483640
      Orientation     =   0
      Enabled         =   -1
      Connect         =   "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\VB Pro\elibrary.mdb;Persist Security Info=False"
      OLEDBString     =   "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=D:\VB Pro\elibrary.mdb;Persist Security Info=False"
      OLEDBFile       =   ""
      DataSourceName  =   ""
      OtherAttributes =   ""
      UserName        =   ""
      Password        =   ""
      RecordSource    =   "UserInfo"
      Caption         =   "Adodc1"
      BeginProperty Font {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      _Version        =   393216
   End
   Begin VB.CommandButton cmdDelete 
      Caption         =   "&Delete"
      Height          =   495
      Left            =   120
      TabIndex        =   1
      Top             =   2760
      Width           =   1335
   End
   Begin MSDataGridLib.DataGrid DataGrid1 
      Bindings        =   "Userlist.frx":1CFA
      Height          =   2055
      Left            =   120
      TabIndex        =   0
      Top             =   360
      Width           =   5775
      _ExtentX        =   10186
      _ExtentY        =   3625
      _Version        =   393216
      HeadLines       =   1
      RowHeight       =   15
      BeginProperty HeadFont {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      BeginProperty Font {0BE35203-8F91-11CE-9DE3-00AA004BB851} 
         Name            =   "MS Sans Serif"
         Size            =   8.25
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      ColumnCount     =   2
      BeginProperty Column00 
         DataField       =   ""
         Caption         =   ""
         BeginProperty DataFormat {6D835690-900B-11D0-9484-00A0C91110ED} 
            Type            =   0
            Format          =   ""
            HaveTrueFalseNull=   0
            FirstDayOfWeek  =   0
            FirstWeekOfYear =   0
            LCID            =   1033
            SubFormatType   =   0
         EndProperty
      EndProperty
      BeginProperty Column01 
         DataField       =   ""
         Caption         =   ""
         BeginProperty DataFormat {6D835690-900B-11D0-9484-00A0C91110ED} 
            Type            =   0
            Format          =   ""
            HaveTrueFalseNull=   0
            FirstDayOfWeek  =   0
            FirstWeekOfYear =   0
            LCID            =   1033
            SubFormatType   =   0
         EndProperty
      EndProperty
      SplitCount      =   1
      BeginProperty Split0 
         BeginProperty Column00 
         EndProperty
         BeginProperty Column01 
         EndProperty
      EndProperty
   End
   Begin VB.Menu mnu_change 
      Caption         =   "&Change"
      Index           =   1
      Begin VB.Menu mnu_changeuserid 
         Caption         =   "&Username"
      End
      Begin VB.Menu mnu_pass 
         Caption         =   "&Password"
      End
   End
End
Attribute VB_Name = "Userlist"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdDelete_Click()
Confirm = MsgBox("Are you sure you want to delete this record?", vbYesNo, "Deletion Confirmation")
If Confirm = vbYes Then
With Adodc1
    .Recordset.Delete
End With
MsgBox "Record Deleted!", , "Message"
Else
MsgBox "Record Not Deleted!", , "Message"
End If
End Sub

Private Sub cmdNext_Click()
If Not Adodc1.Recordset.EOF Then
Adodc1.Recordset.MoveNext
If Adodc1.Recordset.EOF Then
Adodc1.Recordset.MovePrevious
End If
End If
End Sub

Private Sub cmdOk_Click()
Unload Me
End Sub

Private Sub cmdPrevious_Click()
If Not Adodc1.Recordset.BOF Then
Adodc1.Recordset.MovePrevious
If Adodc1.Recordset.BOF Then
Adodc1.Recordset.MoveNext
End If
End If

End Sub
