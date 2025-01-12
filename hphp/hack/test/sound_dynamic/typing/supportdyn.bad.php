<?hh

function expr(supportdyn<nonnull> $sd): void {
  $sd[0];
  $sd[] = 0;
  $sd::f();
  $sd->m();
  $sd?->m();
  $sd->p;
  $sd?->p;
  'str'.$sd;
  $sd + 1;
}

async function stmt(supportdyn<nonnull> $sd): Awaitable<void> {
  foreach ($sd as $_) {}
  foreach ($sd as $_k => $_v) {}
  await $sd;
}

type N = supportdyn<nonnull>;

function access_typeconst(N::C $_): void {}
function cname(classname<supportdyn<nonnull>> $_): void {}
enum E: supportdyn<nonnull> {}

function expectDyn(dynamic $d):void { }

function test1(supportdyn<mixed> $sd):void {
  expectDyn($sd);
}

function voidfun():void { }
function void_to_supportdynamic():supportdynamic {
  return voidfun();
}
